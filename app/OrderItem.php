<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $fillable = ['id','title', 'note','quantity','price', 'order_id'];

    public function order()
    {
        return $this->belongsTo('App\Order');
    }
}
