<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DrawTime extends Model
{
    protected $fillable = ['time'];

    public function results()
    {
        return $this->hasMany(LotteryResult::class);
    }
}
