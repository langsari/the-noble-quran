<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thai extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 'Text','ayat','audio'.'status'
    ];
    // public function trans()
    // {
    //     return $this->belongsTo('App/Models/Arabic');
    // }
}
