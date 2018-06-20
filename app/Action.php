<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    //commented
    public $table = 'action';
    public function depends_on() {
        return $this->hasMany('App\DependsOn');
    }
    public function depends_from() {
        return $this->hasMany('App\DependsFrom');
    }
    public function description_and_actions() {
        return $this->hasMany('App\DescriptionAndActions');
    }
    public function has_actions() {
        return $this->hasMany('App\Action');
    }
    public function opposite_actions() {
        return $this->belongsTo('App\Action');
    }
}