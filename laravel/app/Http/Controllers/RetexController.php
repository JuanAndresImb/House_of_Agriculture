<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Retex;

class RetexController extends Controller
{
    //GET retex
    public function index(Request $request)
    {
        $query = Retex::query();
        if ($q = $request->input('q')) {
            $query->where('title', 'like', "%{$q}%");
        }
        $retexes = $query->latest()->paginate(10);
        return view('pages.partager-retex', compact('retexes'));
    }
    //GET RETEX id 
    public function show(Retex $retex)
    {
        return view('pages.partager-retex', compact('retexes'));
    }
}