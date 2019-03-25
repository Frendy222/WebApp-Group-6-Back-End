<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPlan extends Model
{
    protected $fillable = ['user_id', 'plan_id', 'status'];
    protected $table = 'user_plan';

    public function user() {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
    public function plan() {
        return $this->belongsTo('App\plan', 'plan_id', 'id');
    }
}
