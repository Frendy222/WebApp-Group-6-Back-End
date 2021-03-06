<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;
use App\Notifications\Reminder;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable;

    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    //fillable for the data that later can be filled and be access
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password', 'birthday', 'gender', 'role_id', 'exp', 'level',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //needed to use the JWT auth
    public function getJWTIdentifier(){
        return $this->getkey();
    }
    public function getJWTCustomClaims(){
        return [];
    }

    //needed to make the roles auth like admin, so that the api (this is the built in )
    public function roles()
    {
        return $this
            ->belongsTo('App\Role');
    }
    public function authorizeRoles($roles)
    {
      if ($this->hasAnyRole($roles)) {
        return true;
      }
      abort(401, 'This action is unauthorized.');
    }
    public function hasAnyRole($roles)
    {
      if (is_array($roles)) {
        foreach ($roles as $role) {
          if ($this->hasRole($role)) {
            return true;
          }
        }
      } else {
        if ($this->hasRole($roles)) {
          return true;
        }
      }
      return false;
    }
    public function hasRole($role)
    {
      if ($this->role_id == 1) {
        return true;
      }
      return false;
    }

} 
