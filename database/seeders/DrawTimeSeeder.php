<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DrawTimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $start = Carbon::createFromTime(16, 00); // 10:00 PM
        $end = Carbon::createFromTime(20, 00);    // 4:00 PM

        while ($start <= $end) {
            DB::table('draw_times')->insert([
                'time' => $start->format('H:i:s'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            $start->addMinutes(20);
        }
    }
}
