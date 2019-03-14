<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPlan extends Model
{
    protected $fillable = ['user_id', 'plan_id', 'status'];

    public function user() {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
    public function plan() {
        return $this->belongsTO('App/plan', 'plan_id', 'id');
    }
}
