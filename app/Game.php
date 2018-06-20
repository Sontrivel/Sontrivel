<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    public $table = 'game';
    public function depends_on() {
        return $this->hasMany('App\DependsOn');
    }
    public function depends_from() {
        return $this->hasMany('App\DependsFrom');
    }
}