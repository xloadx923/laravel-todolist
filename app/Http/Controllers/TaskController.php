<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected array $nav = [];

    public function index()
    {
        $this->nav = [1=>"Accueil", 2=>"Créer une tâche", 3=>"Liste", 4=>"Historique", 5=>(isset($_SESSION['login']) ? "Déconnexion" : "Connexion")];

        $content = [
            'title' => 'Gestion des tâches',
            'maintitle' => isset($_REQUEST['dir']) ?  $this->nav[$_REQUEST['dir']] : $this->nav[0],
            'nav' => $this->nav
        ];
        return view('index', $content);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $content = [
            'title' => 'Gestion des tâches',
            'maintitle' => 'Création d\'une tâche',
            'nav' => $this->nav
        ];
        return view('create', $content);
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
    public function update(Request $request, $id)
    {
        //
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
