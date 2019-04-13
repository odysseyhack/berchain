<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NgoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        $projects = $user->projects;

        return view('projects.index')->with(compact('user', 'projects'));

    }

}
