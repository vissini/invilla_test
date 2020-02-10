<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ship extends Model
{
    protected $fillable = ['id', 'name', 'address', 'city', 'country', 'order_id'];

    public function order()
    {
        return $this->hasOne('App\Order');
    }
}
