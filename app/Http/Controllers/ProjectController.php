<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * List users projects
     *
     * @param CoinvertService $coinvertService
     * @return Response
     */
    public function index()
    {
        $user = Auth::user();

        $projects = $user->projects;

        return view('projects.index')->with(compact('user', 'projects'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::find($id);
        $project->load(['transactions', 'kpis']);

        return view('projects.show')->with(compact('project'));

    }
}
