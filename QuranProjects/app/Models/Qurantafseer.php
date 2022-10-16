<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qurantafseer extends Model
{
    use HasFactory;
    protected $fillable = ['name','qurantafseer','resource','user_id'];
    public function tafseertext()
    {
        return $this->belongsTo(Datasurah::class,'datasurah_id');
    }
    public function user(){
        return $this->hasOne(User::class,'id','user_id');
    }
   
}
