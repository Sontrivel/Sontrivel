<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DependsOn extends Model
{
    public $table = 'depends_on';
    public function action() {
        return $this->belongsTo('App\Action');
    }
    public function game() {
        return $this->belongsTo('App\Game');
    }
}