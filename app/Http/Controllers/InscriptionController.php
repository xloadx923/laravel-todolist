<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\TaskController;
use App\Models\UserLog;

class InscriptionController extends Controller
{
    public function inscription(){        
        $content = [
            'title' => 'Gestion des tâches',
            'maintitle' => 'Page d\'inscription',
            'nav' => TaskController::getNav()
        ];
        return view('inscription', $content);
    }
    public function postInscription(Request $request){    
        $request->validate([
            'name' => ['required', 'min:5'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed', 'min:8'],
            'password_confirmation' => ['required']
        ]);           
        $user = new UserLog([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'remember_token' => $request->_token
        ]);


        $user->save();
        return redirect($request->header('Referer'));
    }
}
