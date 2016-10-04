<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producer extends Model
{
    protected $fillable = ['id','name'];

    public function parts()
    {
        return $this->hasMany('App\Part');
    }
}