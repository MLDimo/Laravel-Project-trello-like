<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Liste extends Model
{
    public function orders()
    {
        return $this->hasMany('App\Card');
    }
}
