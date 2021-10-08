<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tafseer extends Model
{
    use HasFactory;
    public function data()
    {
        return $this->belongsTo('App/Models/Datasurah');
    }
}
