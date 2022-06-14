<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function getAllUser()
{
    // Selectionner des données

   $Users = User::wherenotin('id',[])->inRandomOrder()->limit(5)->get();

    return view('/suggestion',[
        'users' => $Users,
       
    
    

        ]);

  
    }

}
