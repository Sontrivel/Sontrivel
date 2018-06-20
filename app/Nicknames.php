<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nicknames extends Model
{
    public $table = 'nicknames';
    public function nicknames() {
        return $this->belongsTo('App\User');
    }
}