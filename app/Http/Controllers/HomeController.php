<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\LotteryResult;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('home');
    }

    public function login()
    {
        return view('login');
    }

    public function postLogin(Request $request)
    {
        $validated = Validator::make(
            $request->all(),
            [
                'email'    => 'required|email',
                'password' => 'required',
            ]
        );
        if ($validated->fails())
            return validationError($validated);
        try {
            $mUser = new User();
            $user  = $mUser->getUserByEmail($request->email);
            if (!$user)
                return redirect('/login')->with('error', 'Account does not exist !!!');

            // if ($user->suspended == true)
            //     throw new Exception("You are not authorized to log in!");
            if (Hash::check($request->password, $user->password)) {
                $token = $user->createToken('my-app-token')->plainTextToken;

                $data['token'] = $token;
                $data['userDetails'] = $user;
                return redirect('/admin/lottery-results')->with('success', 'You have Logged In Successfully');
            }
        } catch (Exception $e) {
            return redirect('/login')->with('error', 'There was an error sending your message: ' . $e->getMessage());
        }
    }

    public function result()
    {
        return view('result');
    }

    public function resultSummary(Request $request)
    {
        try {
            $games = Game::all(); // For dropdown

            $results = [];

            if ($request->isMethod('post')) {
                $request->validate([
                    'selectGame'  => 'required',
                    'selectYear'  => 'required|integer',
                    'selectMonth' => 'required|integer|min:1|max:12',
                ]);

                $gameCode = $request->input('selectGame');
                $year     = $request->input('selectYear');
                $month    = $request->input('selectMonth');

                // Get game id by code
                $game = Game::where('id', $gameCode)->first();

                if ($game) {
                    $results = LotteryResult::with('drawTime')
                        ->join('games', 'lottery_results.game_id', '=', 'games.id')
                        ->where('game_id', $game->id)
                        ->whereYear('draw_date', $year)
                        ->whereMonth('draw_date', $month)
                        ->orderBy('draw_date')
                        ->orderBy('draw_time_id')
                        ->get();
                }
            }

            return view('result-summary', compact('games', 'results'));
        } catch (Exception $e) {
            return redirect('/result-summary')->with('error', 'There was an error processing your request: ' . $e->getMessage());
        }

        // return view('result-summary');
    }

    public function resultSummaryData(Request $request)
    {
        try {
            $request->validate([
                'selectGame' => 'required',
                'selectYear' => 'required|integer',
                'selectMonth' => 'required|integer|min:1|max:12',
            ]);

            $gameCode = $request->input('selectGame');
            $year = $request->input('selectYear');
            $month = $request->input('selectMonth');

            // Get game id by code
            $game = Game::where('code', $gameCode)->first();

            if ($game) {
                $results = LotteryResult::with('drawTime')
                    ->where('game_id', $game->id)
                    ->whereYear('draw_date', $year)
                    ->whereMonth('draw_date', $month)
                    ->orderBy('draw_date')
                    ->orderBy('draw_time_id')
                    ->get();
            }
            return view('result-summary', compact('games', 'results'));
        } catch (Exception $e) {
            return redirect('/result-summary')->with('error', 'There was an error processing your request: ' . $e->getMessage());
        }
    }
}
