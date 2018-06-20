<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Friendlist extends Model
{
    public $table = 'friendlist';
    public function friendlist() {
        return $this->belongsTo('App\User');
    }
}