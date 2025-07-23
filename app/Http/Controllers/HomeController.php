<?php

namespace App\Http\Controllers;

use App\Models\DrawTime;
use App\Models\Game;
use App\Models\LotteryResult;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Lottery;

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
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/result')
                ->with('success', 'Login successful');
        }

        return back()->withErrors(['email' => 'Invalid credentials'])->onlyInput('email');
    }

    public function result(Request $request)
    {
        $currentTime = Carbon::now()->format('H:i:s');
        $date        = $request->input('selectDate') ? Carbon::createFromFormat('d/m/Y', $request->input('selectDate'))->format('Y-m-d') : now()->format('Y-m-d');

        $games     = Game::all(); // Should contain fields: id, name, color, number_range
        $drawTimes = DrawTime::where('draw_times.time', '<=', $currentTime)->orderByDesc('time')->get();
        $times     = DrawTime::all();
        $results   = LotteryResult::with(['drawTime', 'game'])
            ->join('draw_times',  'draw_times.id', 'lottery_results.draw_time_id')
            ->where('draw_times.time', '<=', $currentTime)
            ->whereDate('draw_date', $date)
            ->get();

        if (Auth::check()) {
            $user = Auth::user();
            $results = LotteryResult::with(['drawTime', 'game'])
                ->whereDate('draw_date', $date)
                ->get();
        }

        return view('result', compact('results', 'games', 'drawTimes', 'times'))
            ->with('selectedDate', $date);
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

    public function logout()
    {
        Auth::logout(); // logging out user
        return Redirect::to('result'); // redirection to login screen
    }

    public function test()
    {
        $todayDate   = Carbon::now()->format('Y-m-d');
        $currentTime = Carbon::now()->format('H:i:s');

        $results = LotteryResult::select('lottery_results.*', 'draw_times.time', 'games.name as game_name')
            ->whereIn(DB::raw('(draw_time_id, draw_date)'), function ($query) {
                $query->select(DB::raw('draw_time_id, draw_date'))
                    ->from('lottery_results')
                    ->groupBy('draw_time_id', 'draw_date')
                    ->havingRaw('COUNT(DISTINCT game_id) > 1');
            })
            ->join('draw_times',  'draw_times.id', 'lottery_results.draw_time_id')
            ->join('games',  'games.id', 'lottery_results.game_id')
            ->where('draw_times.time', '<=', $currentTime)
            ->where('draw_date', $todayDate)
            ->orderByDesc('draw_date')
            ->orderByDesc('draw_time_id')
            ->orderByDesc('lottery_results.id')
            ->limit(4)
            ->get();

        return $results;
    }
}
