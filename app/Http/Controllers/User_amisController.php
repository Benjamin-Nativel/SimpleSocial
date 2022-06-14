<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Users_amis;
use Illuminate\Http\Request;

class User_amisController extends Controller
{
    
    public function showamis()
    {

        // ici la demande c'est pas bon, l'ajout doit aller chez l'autre mec, et non retourner chez moi
        $amis = User::all();
        // $demandes =User::all();
        $demandes =User::with('amis')->where('id','1')->first();
        //on récuperer un user( donc un first) avec ses amis donc on est obligé de faire un get
        //les amis (tableaux) on fait un get pour les récupérers
        return view('amis', [
            'amis' => $amis,
            'demandes' => $demandes->amis()->get(),
        
            //ici on récupere list d'amis donc get()
        ]);
    }



    /** 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeamis(Request $request)
    {

        $validate = $request->validate([

            'amis_id' => 'required ',
            'users_id' => 'required ',
        ]);
        $amis = Users_amis::get();

        $amis = new Users_amis();
        $amis->amis_id = $validate['amis_id'];
        $amis->users_id = $validate['users_id'];
        $amis->accepted = 0;
        $amis->save();
        // $amis->amis()->attach($validate['amis_id']);
        return redirect()->route('amis');
    }
}
