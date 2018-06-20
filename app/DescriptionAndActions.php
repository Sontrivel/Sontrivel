<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DescriptionAndActions extends Model
{
    public $table = 'description_and_actions';
    public function description() {
        return $this->belongsTo('App\Description');
    }
    public function actions() {
        return $this->belongsTo('App\Action');
    }
}