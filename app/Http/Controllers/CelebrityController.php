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
        Celebrity::create($request->all());
        return redirect()->route("home");
    }

    public function delete($id)
    {
        $celebrity = Celebrity::find($id);
        $celebrity->delete();
        return redirect()->route("home");
    }

    public function edit($id)
    {
        $celebrity = Celebrity::find($id);
        return view("edit", compact('celebrity'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'firstname' => ['required', 'max:55'],
            'lastname' => ['required', 'max:55'],
            'image' => ['required', 'max:255', 'url'],
            'description' => ['required', 'max:500']
        ]);
        $celebrity = Celebrity::find($request->id);
        $celebrity->update(
            ['firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'image' => $request->image,
            'description' => $request->description
        ]);
        return redirect()->route("home");
    }
}
