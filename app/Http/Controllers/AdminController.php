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
        return view('admin.lottery-result', compact('results'));
    }


    public function create()
    {
        $games = Game::all();
        $times = DrawTime::all();
        return view('admin.add-result', compact('games', 'times'));
    }

    public function store(Request $request)
    {
        // return $request->all();
        $request->validate([
            'game_id'      => 'required|exists:games,id',
            'draw_time_id' => 'required|exists:draw_times,id',
            'draw_date'    => 'required|date',
            'number'       => 'nullable|integer|between:0,99',
        ]);

        LotteryResult::create($request->all());

        for ($i = 1; $i <= 4; $i++) {

            if ($i == 3)
                continue; // Skip iteration when $i is 3

            $result = new LotteryResult();
            $result->game_id      = $i;
            $result->draw_time_id = $request->draw_time_id;
            $result->draw_date    = $request->draw_date;
            $result->number       = $request->number + rand(0, 9); // Adding a random number between 0 and 9 to the input number

            // Check if already exists
            $exists = LotteryResult::where('game_id', $result->game_id)
                ->where('draw_time_id', $result->draw_time_id)
                ->where('draw_date', $result->draw_date)
                ->exists();

            if (!$exists) {
                $result->save();
            }

            $result->save();
        }

        return redirect()->route('result')->with('success', 'Result saved.');
    }
}
