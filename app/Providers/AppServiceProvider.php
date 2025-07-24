<?php

namespace App\Providers;

use App\Models\DrawTime;
use App\Models\LotteryResult;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('layout.app', function ($view) {
            $todayDate = Carbon::now()->format('Y-m-d');
            $currentTime = Carbon::now()->format('H:i:s');

            $results = LotteryResult::select('lottery_results.*', 'draw_times.time', 'games.name as game_name')
                ->whereIn(DB::raw('(draw_time_id, draw_date)'), function ($query) {
                    $query->select(DB::raw('draw_time_id, draw_date'))
                        ->from('lottery_results')
                        ->groupBy('draw_time_id', 'draw_date')
                        ->havingRaw('COUNT(DISTINCT game_id) > 1');
                })
                ->join('draw_times',  'draw_times.id', '=', 'lottery_results.draw_time_id')
                ->join('games',  'games.id', '=', 'lottery_results.game_id')
                ->where('draw_times.time', '<=', $currentTime)
                ->where('draw_date', $todayDate)
                ->orderByDesc('draw_date')
                ->orderByDesc('draw_time_id')
                ->orderByDesc('lottery_results.id')
                ->limit(4)
                ->get();

            $nextDrawTime = DrawTime::where('time', '>', $currentTime)
                ->orderBy('time', 'asc')
                ->first();

            $view->with([
                'results'      => $results,
                'nextDrawTime' => $nextDrawTime,
            ]);
        });
    }
}
