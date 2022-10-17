<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tafseer extends Model
{
    use HasFactory;
    //protected $table = 'tafseers';
    protected $fillable = ['name','youtubeId','datasurah_id','user_id'];
    public function data()
    {
        return $this->belongsTo(Datasurah::class,'datasurah_id');
    }
    public function user(){
        return $this->hasOne(User::class,'id','user_id');
    }
}
