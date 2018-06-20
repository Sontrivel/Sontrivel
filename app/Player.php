<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    public $table = 'player';
    public function player_game_pos() {
        return $this->belongsTo('App\PlayerGamePos');
    }
    public function game() {
        return $this->belongsTo('App\Game');
    }
}