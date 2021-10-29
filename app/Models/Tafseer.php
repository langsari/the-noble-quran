<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tafseer extends Model
{
    use HasFactory;
    protected $table = 'tafseers';
    public function data()
    {
        return $this->belongsTo(Datasurah::class,'datasurah_id');
    }
}
