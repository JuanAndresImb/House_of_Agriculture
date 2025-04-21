<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class ApprendreController extends Controller
{
    //GET elearning
    
    public function elearning(Request $request) 
    {
        $query = Course::where('type', 'elearning');
        if ($search = $request->input('q')) {
            $query->where('title', 'like', "%{$search}%");
        }
        $courses = $query->paginate(10);
        return view('pages.apprendre-elearning', compact('courses'));
    }

    //GET formations

    public function formations(Request $formation)
    {
        $query = Course::where('type', 'formation');
        if ($search = $request->input('q')) {
            $query->where('title', 'like', "%{$search}%");
        }
        $courses = $query->paginate(10);
        return view ('pages.apprendre-formations', compact('courses'));
    }
}

