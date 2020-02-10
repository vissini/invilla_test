<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $fillable = ['id', 'phone'];

    public function people()
    {
        return $this->belongsTo('App\People');
    }
}
