<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Farm;

class PortraitController extends Controller
{
    public function index(Request $request)
    {
        $query = Farm::query();
        if ($q = $request->input('q')) {
            $query->where('name', 'like', "%{$q}%");
        }
        $farms = $query->latest()->paginate(12);
        return view('pages.partager-portraits', compact('farms'));
    }

    public function show(Farm $farm)
    {
        return view('pages.farm-show', compact('farm'));
    }
}
