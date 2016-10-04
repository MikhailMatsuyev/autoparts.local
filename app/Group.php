<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = ['id','name'];

    public function Group()
    {
        return $this->hasMany('App\Part');
    }
}
