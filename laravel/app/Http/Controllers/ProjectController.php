<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $query = Project::where('is_public', true);
        if ($q = $request->input('q')) {
            $query->where('title', 'like', "%{$q}%");
        }
        $projects = $query->latest()->paginate(9);
        return view('pages.partager-projets', compact('projects'));
    }

    public function show(Project $project)
    {
        //  l’accès securisé :
        if (! $project->is_public && auth()->guest()) {
            abort(403);
        }
        return view('pages.project-show', compact('project'));
    }
}
