<?php

namespace App\Application\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        return Project::orderBy('id', 'asc')->get();
    }

    public function store(Request $request)
    {
        foreach ($request->get('projects') as $project) {
            Project::updateOrCreate(
                [
                    'id' => $project['id'],
                ],
                [
                    'description_en' => $project['description_en'],
                    'description_pt' => $project['description_pt'],
                    'iframe' => $project['iframe'],
                    'title' => $project['title'],
                    'type' => $project['type'],
                ]
            );
        }
    }

    public function destroy(Project $project)
    {
        $project->delete();
    }
}
