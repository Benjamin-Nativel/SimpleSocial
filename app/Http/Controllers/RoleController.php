<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use App\Models\User;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getRoles()
    {
        $roles = Roles::with('users')->get();
        $users = User::all();
        
        return view('roles',[
            'roles'=>$roles,
            'users'=>$users
        ]);
       
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRole($id){
        
        $roles=Roles::find($id);
        $role = Roles::with('users')->get();
        $users=User::all();

        return view('role',[

            'roles'=>$roles,
            'role'=>$role,
            'users'=>$users
            

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id){
        
       
        $validated=$request->validate([
            'label'=>'required|max:50',
           
        ]);

        $roles=Roles::where('id','=',$id)->get();
        $roles=Roles::find($id);

        $roles->label=$validated['label'];
       
        // $users->email=$validated['email'];
       
        $roles->update();
        
        return redirect()->route('roles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
