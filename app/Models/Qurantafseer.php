<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qurantafseer extends Model
{
    use HasFactory;
    public function tafseertext()
    {
        return $this->belongsTo(Datasurah::class,'datasurah_id');
    }
}
