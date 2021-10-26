<?php

namespace App;

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
        return $this->hasOne(Thai::class,'arabic_id','arabic_id');
    }
}
