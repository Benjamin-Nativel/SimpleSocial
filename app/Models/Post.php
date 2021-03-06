<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class,'id_users');
    }
   public function comments(){
        return $this->hasMany(Commentaires::class,'id_post');
    }
}
