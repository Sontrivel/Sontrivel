<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
      public $table = 'description';
    public function description_and_actions() {
        return $this->hasMany('App\DescriptionAndActions');
    }
    public function user() {
        return $this->hasMany('App\PlayerGamePos');
    }
}