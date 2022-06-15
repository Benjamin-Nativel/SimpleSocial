<?php

namespace App\Http\Controllers;

use App\Models\Interest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AuthController extends Controller
{
    public function getRegister(){
       $interest =  Interest::all(); 
       return view('register',[
            'interest' => $interest]);
    }
    
    
    public function register(Request $request){
        
        $validated= $request->validate([
            'images' =>'required',
            'name' => 'required',
            'prenom' => 'required',
            'email' =>'required|unique:users,email|max:255',
            'interest' =>'required',
            'password' =>'required',
            'age' =>'required'
        ]);
        $register = new User();
        
            $path = Storage::disk('public')->put('avatar', $request->file('images'));
            $register->avatar = $path;
            
    
        

            
            $register->name=$validated ['name'];
            $register->prenom=$validated ['prenom'];
            $register->age=$validated ['age'];
            $register->email=$validated['email'];
            $register->password=Hash::make($validated['password']);
            $register->save();
            $register->interests()->attach($validated['interest']);
            $register->save();
         return redirect()->Route('login');
        }
    
    public function getLogin(){
        return view('login');
    }
    public function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials, $remember = true)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
                     
        }

        return view('login');
}
}