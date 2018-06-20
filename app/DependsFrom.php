<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DependsFrom extends Model
{
    public $table = 'depends_from';
    public function action() {
        return $this->belongsTo('App\Action');
    }
    public function game() {
        return $this->belongsTo('App\Game');
    }
}