<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\TaskController;
use App\Models\UserLog;

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

        $result = UserLog::where(["email", "=", $request->email],["password", "=", $request->password]);

        dd($result->toSql());

        if($result->exists){
            session(['login' => true]);
        }

        if($request->session()->get('login')) return 'La connexion est activée';
        else return 'La connexion a échoué...';
    }

}
