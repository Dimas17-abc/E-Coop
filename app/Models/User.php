<?php

namespace App\Models;

<<<<<<< HEAD
  

=======
>>>>>>> 519d056291fcfc67a547d63fc1f7bd084e471e1a
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
<<<<<<< HEAD
use Spatie\Permission\Traits\HasRoles;

  

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
=======
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
>>>>>>> 519d056291fcfc67a547d63fc1f7bd084e471e1a
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

<<<<<<< HEAD
  

    /**

     * The attributes that should be hidden for arrays.

     *

     * @var array
     */

    protected $hidden = [

        'password',

        'remember_token',

    ];

  

    /**

     * The attributes that should be cast to native types.

     *

     * @var array

     */

    protected $casts = [

        'email_verified_at' => 'datetime',

=======
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
>>>>>>> 519d056291fcfc67a547d63fc1f7bd084e471e1a
    ];
}
