<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'FirstName', 'email', 'password', 'LastName', 'role',
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

    // public function hasManyRoles($roles){
    //     if($this->whereIn('roles', $roels)){
    //         return true;
    //     }else{
    //         return false;
    //     }
    // }

    public function hasRole($role){
        if ($this->role == $role){
            return true;
        } else{
            return false;
        }
    }

    public function scopeisUser($id){
        if ($this->id == $id){
            return true;
        } else {
            return false;
        }
    }
}
