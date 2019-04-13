<?php

namespace App\Http\Controllers;

use App\Project;
use App\Transformers\ProjectTransformer;
use Illuminate\Routing\Controller as BaseController;

class DashboardController extends BaseController
{
    /**
     * Display a badge
     *
     * @param $id
     * @param ProjectTransformer $projectTransformer
     * @return view
     */
    public function showDashboard($id, ProjectTransformer $projectTransformer)
    {
        $dbProject = Project::find($id);
        $project = $projectTransformer->transform($dbProject);

        return view('dashboard')
            ->with([
                'project' => $project
            ]);
    }
}
