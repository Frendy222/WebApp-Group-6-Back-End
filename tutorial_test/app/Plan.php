<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class plan extends Model
{
    protected $fillable = ['type', 'reward_exp', 'plan_description'];
}
