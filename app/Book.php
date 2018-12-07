<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    protected $guarded = [];
    //
    public function people()
    {
        return $this->belongsToMany('App\Person');
    }
    public function topics()
    {
        return $this->belongsToMany('App\Category')
            ->where('categories.type', '=', 'topic');
    }
}
