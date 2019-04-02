<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class notif extends Model
{
    // so that we just need to use notif later
    protected $table = 'notif';
    
    // data that can be fill
    protected $fillable = ['from', 'to', 'message'];
}
