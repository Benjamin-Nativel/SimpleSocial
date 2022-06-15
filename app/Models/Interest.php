<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
    use HasFactory;

    protected $table='interest';

    public function int_users()
    {
        return $this->belongsToMany(User::class,'interest_users', 'id_interest','id_users');
    }
}       
