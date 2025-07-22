<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LotteryResultsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $startDate = Carbon::create(2025, 7, 1);
        $endDate = Carbon::create(2025, 7, 31);

        // Get all draw_time_ids from the draw_times table
        $drawTimeIds = DB::table('draw_times')->pluck('id');

        // Define all game IDs you want to seed
        $gameIds = [1, 2, 3, 4];

        while ($startDate->lte($endDate)) {
            foreach ($gameIds as $gameId) {
                foreach ($drawTimeIds as $drawTimeId) {
                    DB::table('lottery_results')->insert([
                        'game_id' => $gameId,
                        'draw_time_id' => $drawTimeId,
                        'draw_date' => $startDate->toDateString(),
                        'number' => rand(0, 99),
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }
            }
            $startDate->addDay();
        }
    }
}
