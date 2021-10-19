<?php

namespace App\Http\Controllers;

use App\Models\Celebrity;
use Illuminate\Http\Request;

class CelebrityController extends Controller
{
    public function index()
    {
        $celebrities = Celebrity::orderBy('lastname')->get();
        return view('index', compact("celebrities"));
    }

    public function create()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'firstname' => ['required', 'max:55'],
            'lastname' => ['required', 'max:55', 'unique:celebrities'],
            'image' => ['required', 'max:255', 'url'],
            'description' => ['required', 'max:500']
        ]);
        Celebrity::create([
            $request->all()
        ]);
    }
}
