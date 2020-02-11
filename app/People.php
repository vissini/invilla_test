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
    public function orders()
    {
        return $this->hasMany('App\Order');
    }
}
