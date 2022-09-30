<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Contain;
use App\Models\Theme;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $nav = ["index"=>"Accueil", "index/create"=>"Créer une tâche", "index/list"=>"Liste", "index/history"=>"Historique", "index/connexion"=>(isset($_SESSION['login']) ? "Déconnexion" : "Connexion")];


        $content = [
            'title' => 'Gestion des tâches',
            'maintitle' => 'Accueil',
            'nav' => $nav,
            'tasks' =>  Task::where('done', 0),
            'contains' => Contain::all(),
            'themes' =>  Theme::all()
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
