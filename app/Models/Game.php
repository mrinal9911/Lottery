<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = ['name'];

    public function results()
    {
        return $this->hasMany(LotteryResult::class);
    }
}
