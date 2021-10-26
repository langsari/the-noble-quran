<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thai extends Model
{
    use HasFactory;
    protected $fillable = [
        'arabic_id', 'text',
    ];
    public function thais()
    {
        return $this->belongsTo(Arabic::class);
    }
}
