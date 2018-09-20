<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Influence extends Model
{
    //
    protected $guarded = [];
    public function people()
    {
        return $this->belongsToMany('App\Person');
    }
}
