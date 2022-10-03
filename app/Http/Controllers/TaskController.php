<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Contain;
use App\Models\Theme;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public static function getNav():array{
        return ["/"=>"Accueil", "/create"=>"Créer une tâche", "/index/list"=>"Liste", "/index/history"=>"Historique", "/connexion"=>(isset($_SESSION['login']) ? "Déconnexion" : "Connexion")];
    }

    public function index()
    {                    
        $content = [            
            'page' => 1,
            'title' => 'Gestion des tâches',
            'maintitle' => 'Accueil',
            'nav' => self::getNav(),
            'tasks' =>  Task::where('done', 0)->get(),
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
    public function create(){
        $content = [
            'title' => 'Gestion des tâches',
            'maintitle' => 'Création d\'une tâche',
            'nav' => self::getNav()
        ];
        return view('create', $content);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {   
        $content = [
            'title' => 'Gestion des tâches',
            'maintitle' => 'Liste des tâches',
            'nav' => self::getNav(),
            'tasks' =>  Task::all(),
            'contains' => Contain::all(),
            'themes' =>  Theme::all()
        ];
        return view('index', $content);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function history()
    {   
        $content = [
            'title' => 'Gestion des tâches',
            'maintitle' => 'Liste des tâches',
            'nav' => self::getNav(),
            'tasks' =>  Task::where('done', 1)->get(),
            'contains' => Contain::all(),
            'themes' =>  Theme::all()
        ];
        return view('index', $content);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validated();
        $validated = $request->safe()->only(['logUser', 'passUser']);
        $validated = $request->safe()->except(['logUser', 'passUser']);
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
