<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datasurah extends Model
{
    use HasFactory;
    protected $table = 'datasurahs';

    protected $fillable = [
       'th_name'
    ];
    //protected $fillable = ['th_name', 'surah_name', 'whole_ayah']; 
    public function arabic()
    {
        return $this->hasMany(Arabic::class,'datasurah_id');
    }
    
    public function tafseer()
    {
        return $this->hasMany(Tafseer::class,'datasurah_id');
    }

    public function tran()
    {
        return $this->hasMany(Thai::class,'datasurah_id');
    }
}