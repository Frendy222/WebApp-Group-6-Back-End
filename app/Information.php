<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    //data that can be fill 
    protected $fillable = [
        'title', 'content', 'date',
    ];
}
