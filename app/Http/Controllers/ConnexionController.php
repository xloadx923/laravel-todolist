<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\TaskController;

class ConnexionController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function formulaire()
    {
        $content = [
            'title' => 'Gestion des tâches',
            'maintitle' => 'Page de connexion',
            'nav' => TaskController::getNav()
        ];
        return view('connexion', $content);
    }

    public function traitement(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $result = auth()->attempt([
            'email' => request('email'),
            'password' => request('password')          
        ]);

        var_dump($result);

        return 'Traitement formulaire connexion';
    }

}
