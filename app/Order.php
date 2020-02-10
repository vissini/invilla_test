<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['id', 'people_id'];

    public function people()
    {
        return $this->belongsTo('App\People');
    }

    public function orderItem()
    {
        return $this->hasMany('App\OrderItem');
    }

    public function ship()
    {
        return $this->hasOne('App\Ship');
    }
}
