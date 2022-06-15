<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

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
    ];
    public function roles()
    {
        return $this->belongsToMany(Roles::class, 'users_roles', 'id_users', 'id_roles');
    }

    public function isAdmin() {
        return $this->role === 'admin';
     }
     public function isUser() {
        return $this->role === 'util';
     }


     public function posts(){
        return $this->hasMany(Post::class,'id_users','id');
     }
     public function Interest(){
        return $this->belongsTo(Interest::class,'interest_users','id_users','id_interest');
     }

     public function amis()
     {
         return $this->belongsToMany(User::class, 'Users_amis', 'users_id', 'amis_id')
             ->withPivot('accepted')
             ->withTimestamps();
     }





}
