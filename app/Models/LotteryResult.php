<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LotteryResult extends Model
{
    protected $fillable = [
        'game_id',
        'draw_time_id',
        'draw_date',
        'number',
    ];

    public function game()
    {
        return $this->belongsTo(Game::class);
    }

    public function drawTime()
    {
        return $this->belongsTo(DrawTime::class);
    }
}
