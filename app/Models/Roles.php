<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsToMany(User::class, 'users_roles', 'id_roles', 'id_users');
    }

    // public function user(){

    //     return $this->belongsTo(User::class, 'id_users');
    
    //   }
}
