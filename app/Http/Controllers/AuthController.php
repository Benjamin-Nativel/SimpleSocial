<?php

namespace App\Http\Controllers;

use App\Models\Interest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function getRegister(){
       $interest =  Interest::all(); 
       return view('register',[
            'interest' => $interest]);
    }
    
    
    public function register(Request $request){

        $validated= $request->validate([
            'name' => 'required',
            'prenom' => 'required',
            'email' =>'required|unique:users,email|max:255',
            'interest' =>'required',
            'password' =>'required',
            'age' =>'required'
        ]);
    

        $register = new User();
        $register->name=$validated ['name'];
        $register->prenom=$validated ['prenom'];
        $register->age=$validated ['age'];
        $register->email=$validated['email'];
        $register->password=Hash::make($validated['password']);
        $register->interest->attach($validated['interest']);
        $register->save();
         return redirect()->Route('login');
    
    }
    public function getLogin(){
        return view('login');
    }
    public function login(Request $request){
        $validated=  $request->validate([
            'email' =>'required',
            'password' =>'required',
        ]);
        $users = User::with('roles')->where('email','=',$validated['email'])->first();
        dd($users);
        if(isset($users) && Hash::check($validated['password'],$users->password)){
            session(['users'=>$users]);
            return redirect()->Route('welcome')->with('success','Vous êtes connecté');
            
        
      $credentials  = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
            }else{
                return redirect()->intended('login')->with('logged', 'user logged');
    
            }
    }
}
}