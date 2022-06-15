<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function getAllUser()
{
    // Selectionner des données

   $Users = User::wherenotin('id',[])->inRandomOrder()->limit(4)->get();

   

    return view('/welcome',[

        'user' => $Users,

        
       
    
    

        ]);

  
    }

    // public function getProfile($id){
    //     $infos=User::find($id);
    //     return view('/welcome',[
    //         'infos'=>$infos
    //     ]);
    // }


}
