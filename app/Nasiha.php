<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nasiha extends Model
{

    protected $fillable = [
        'title', 'description', 'approved','user_id',
    ];



}
