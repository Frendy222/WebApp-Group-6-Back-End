<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPlan extends Model
{
    //fillable for the data that later can be filled and be access
    protected $fillable = ['user_id', 'plan_id', 'status', 'date', 'notif_status'];
    //to make the model is recognized as user_plan instead of UserPlan as it will be contradicting in the controller
    protected $table = 'user_plan';

    //to show that the user_id belong to id in user table
    public function user() {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
    //to show that the plan_id belong to id in plan table
    public function plan() {
        return $this->belongsTo('App\plan', 'plan_id', 'id');
    }
}
