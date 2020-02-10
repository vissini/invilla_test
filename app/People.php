<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $fillable = ['id', 'name'];

    public function phones()
    {
        return $this->hasMany('App\Phone');
    }
}
