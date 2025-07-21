<?php

namespace App\Http\Controllers;

use App\Models\DrawTime;
use App\Models\Game;
use App\Models\LotteryResult;
use App\Models\User;
use Carbon\Carbon;
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
        # auth check
        // if (auth()->check())
        //     return redirect()->route('lottery-results.index');
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
                return redirect('/result')->with('success', 'You have Logged In Successfully');
            }
        } catch (Exception $e) {
            return redirect('/login')->with('error', 'There was an error sending your message: ' . $e->getMessage());
        }
    }

    public function result(Request $request)
    {

        $date = $request->input('selectDate') ? Carbon::createFromFormat('d/m/Y', $request->input('selectDate'))->format('Y-m-d') : now()->format('Y-m-d');

        $results = LotteryResult::with(['drawTime', 'game'])
            ->whereDate('draw_date', $date)
            ->get();

        $games = Game::all(); // Should contain fields: id, name, color, number_range
        $drawTimes = DrawTime::orderBy('time')->get();
        $times = DrawTime::all();

        return view('result', compact('results', 'games', 'drawTimes', 'times'))
            ->with('selectedDate', $date);




        // if ($request->isMethod('post')) {
        //     $request->validate([
        //         'selectDate'  => 'required|integer',
        //         'selectMonth' => 'required|integer|min:1|max:12',
        //     ]);

        //     $gameCode = $request->input('selectGame');
        //     $year     = $request->input('selectYear');
        //     $month    = $request->input('selectMonth');

        //     // Get game id by code
        //     $game = Game::where('id', $gameCode)->first();

        //     if ($game) {
        //         $results = LotteryResult::with('drawTime')
        //             ->join('games', 'lottery_results.game_id', '=', 'games.id')
        //             ->where('game_id', $game->id)
        //             ->whereYear('draw_date', $year)
        //             ->whereMonth('draw_date', $month)
        //             ->orderBy('draw_date')
        //             ->orderBy('draw_time_id')
        //             ->get();
        //     }
        // }
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
                        ->whereDate('draw_date', '<=', now()->toDateString()) // ✅ only till today's date
                        ->orderBy('draw_date')
                        ->orderBy('draw_time_id')
                        ->get();
                }
            }

            return view('result-summary', compact('games', 'results'));
        } catch (Exception $e) {
            return redirect('/result-summary')->with('error', 'There was an error processing your request: ' . $e->getMessage());
        }
    }
}
