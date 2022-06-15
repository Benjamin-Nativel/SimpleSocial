<?php

namespace App\Http\Controllers;

use App\Models\Interest;
use Illuminate\Http\Request;

class InterestController extends Controller
{
            public function getAll() {
                $interet = Interest::all();
                return view('interets', [  
                    'interest' => $interet,
                ]);
            }

            public function show($id) {
                $interet = Interest::find($id);
                return view('/read', [
                    'interest' => $interet,
                ]);

            }
                public function create() {
                    // On retourne la vue "/resources/views/posts/edit.blade.php"
                    return view("addinteret");
                }


                public function add(Request $request) {
                    // 1. La validation
                $interet = $request->input();

                $interet = new interest();
            
                $interet->interet = $request['interet'];
                $interet->save();
                //redirection vers les livre
                return redirect('interets');
            }

            public function delete(Request $id) {
              
                $interet = Interest::find($id->input('id'));
                 
                $interet->delete();
                
                return redirect('/interets')->with('votre intéret est supprimé');;
            }

            public function update(Request $request){
                
            }
        }
       

