<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    //
    protected $guarded = [];
    public function influences()
    {
        return $this->belongsToMany('App\Influence')->whereNull('influences.deleted_at');
    }
    public function media()
    {
        return $this->belongsToMany('App\Media')->whereNull('media.deleted_at');
    }
    public function scopeGender($query, $gender=null)
    {
        if($gender != null){
            return $query->where('sex', '=', $gender);
        }
        return $query;
    }
}
