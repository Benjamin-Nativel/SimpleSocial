<?php

namespace App\Http\Middleware;

use App\Models\User;
use App\models\Roles;
use Closure;
use Illuminate\Http\Request;

class Auth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {


      
  //     if($request->session()->has('user')){
  //       $user= Auth::User->name;//recuperer chant unique
  //       $user=User::with('roles')->get()->where('name' ,'=', $user)->first();

    

  //       foreach ($user->roles as $role) {

  //       if ($role->label ==='ADMIN'){ 

  //     return $next($request);
  //   }else {return redirect()->route('/')->with('status', "vous n'avez pas les droits d'accès du statut administrateur !");}
  // } 
  //  } else{
  //    return redirect()->route('/register');
  // }
  // }
}}