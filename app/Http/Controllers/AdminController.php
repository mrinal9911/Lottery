<?php

namespace App\Http\Controllers;

use App\Models\DrawTime;
use App\Models\Game;
use App\Models\LotteryResult;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $results = LotteryResult::with(['game', 'drawTime'])->latest()->paginate(20);
        return view('admin.lottery_results.index', compact('results'));
    }

    public function create()
    {
        $games = Game::all();
        $times = DrawTime::all();
        return view('admin.lottery_results.create', compact('games', 'times'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'game_id' => 'required|exists:games,id',
            'draw_time_id' => 'required|exists:draw_times,id',
            'draw_date' => 'required|date',
            'number1' => 'nullable|integer|between:0,99',
            'number2' => 'nullable|integer|between:0,99',
            'number3' => 'nullable|integer|between:0,99',
        ]);

        LotteryResult::create($request->all());

        return redirect()->route('lottery-results.index')->with('success', 'Result saved.');
    }
}
