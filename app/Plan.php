<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class plan extends Model
{
    // data that can be fill
    protected $fillable = ['type', 'reward_exp', 'plan_description'];
}
