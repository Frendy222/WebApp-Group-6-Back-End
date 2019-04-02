<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //fillable data
    protected $fillable = ['role'];

    // so that the relationship with user model, which in here is hasMany. so it mean that 1 role has many user
    public function users()
    {
        return $this
            ->hasMany('App\User');
    }
}
