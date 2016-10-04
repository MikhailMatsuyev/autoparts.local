<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    protected $fillable = [
        'id','name', 'producer_id', 'weight', 'price'
    ];

    public function producer()
    {
        return $this->belongsTo('App\Producer');
    }
}
