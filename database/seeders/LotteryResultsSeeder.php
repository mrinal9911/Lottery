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
        $gameId = 1; // Change this to your actual game_id
        $drawTimeCount = 20; // You have 20 draw times per day

        // Set the date range (July 1 to July 31, 2025)
        $startDate = Carbon::create(2025, 7, 1);
        $endDate = Carbon::create(2025, 7, 31);

        while ($startDate->lte($endDate)) {
            for ($drawTimeId = 1; $drawTimeId <= $drawTimeCount; $drawTimeId++) {
                DB::table('lottery_results')->insert([
                    'game_id' => $gameId,
                    'draw_time_id' => $drawTimeId,
                    'draw_date' => $startDate->toDateString(),
                    'number' => rand(0, 99),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }

            $startDate->addDay();
        }
    }
}
