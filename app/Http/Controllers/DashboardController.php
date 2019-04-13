<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Routing\Controller as BaseController;

class DashboardController extends BaseController
{
    /**
     * Display a badge
     *
     * @return view
     */
    public function showDashboard($id)
    {
        $project = Project::find($id);

        $db =[
            [
                'company_name' => 'FOO',
                'description' => 'Description of FOO',
                'some_other_field' => 'This is just another field'
            ],
            [
                'company_name' => 'BAR',
                'description' => 'Description of BAR',
                'some_other_field' => 'This is just another field'
            ]
        ];

        $data = $db[$id];

        // TODO Get the badge data from the store
        return view('dashboard')
            ->with([
                'company_name' => $data['company_name'],
                'description' => $data['description'],
                'some_other_field' => $data['some_other_field'],
                'project' => $project
            ]);
    }
}
