<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// use Illuminate\Database\Eloquent\SoftDeletes;

class Note extends Model
{
    use HasFactory;
    // use SoftDeletes;
    protected $fillable = [
        'title', 'description','datasurah_id','user_id'
    ];
    public function user(){
        return $this->hasOne(User::class,'id','user_id');
    }


}
