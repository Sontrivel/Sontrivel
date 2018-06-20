<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlayerGamePos extends Model
{
    public $table = 'player_game_pos';
    public function player_game_pos() {
        return $this->hasMany('App\Player');
    }
    public function description() {
        return $this->belongsTo('App\Description');
    }
    public function user() {
        return $this->belongsTo('App\User');
    }
}