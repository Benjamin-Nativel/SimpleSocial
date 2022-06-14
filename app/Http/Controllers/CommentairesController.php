<?php

namespace App\Http\Controllers;

use App\Models\Commentaires;

use Illuminate\Http\Request;

class CommentairesController extends Controller
{
    public function add(Request $request)
    {
    
        
                
                
        
                   $comment = new Commentaires();
                    dd($comment);
            $comment->commentaires = $request['commentaires'];
            $comment->save();
            
            
  return redirect()->Route('welcome');

        }
              
               
            }


