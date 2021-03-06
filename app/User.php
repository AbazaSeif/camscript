<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    private $profilePicturePath;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'userName', 'firstName', 'lastName', 'dob', 'email', 'password', 'profilePicturePath',
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
     * Get performer record associate with the user
     */
    public function performer(){
        return $this->hasMany('App\Performer');
    }
}
