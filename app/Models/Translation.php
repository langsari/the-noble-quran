<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Translation extends Model
{
    use HasFactory;

    protected $table = 'daftarsurah';

    protected $fillable = [
    	'surah_name',
        'index'
    ];
}
