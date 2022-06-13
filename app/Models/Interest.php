<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
    use HasFactory;

    protected $table='interest';

    public function Int_user()
    {
        return $this->belongsTo(User::class,'interest_users','id_users','id_interest');
    }
}
