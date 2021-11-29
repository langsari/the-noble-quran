<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arabic extends Model
{
    use HasFactory;
    public function datasurah()
    {
        return $this->belongsTo('App/Models/Datasurah');
    }

    public function thais()
    {
        return $this->hasOne(Thai::class,'id','id');
    }
   
}