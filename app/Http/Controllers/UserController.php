<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function getUsers()
    {
        $users=User::all();
        
        return view('users',[
            'users'=>$users,
            
        ]);
       
    }
    public function update(Request $request,$id){
        
        $path = Storage::disk('public')->put('avatar', $request->file('avatar'));
        $validated=$request->validate([
            'name'=>'required|max:50',
            'prenom'=>'required|max:50',
            // 'email'=>'required|email||unique|max:255',
            'avatar'=>'required|max:1024',
        ]);

        $users=User::where('id','=',$id)->get();
        $users=User::find($id);
        $users->name=$validated['name'];
        $users->prenom=$validated['prenom'];
        // $users->email=$validated['email'];
        $users->$path;
        $users->update();
        return redirect()->route('users');
    }
    public function showUser($id){
        $users=User::find($id);
        return view('user',[
            'users'=>$users
        ]);
    }

   
    }

