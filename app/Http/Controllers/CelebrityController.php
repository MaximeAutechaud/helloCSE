<?php

namespace App\Http\Controllers;

use App\Models\Celebrity;
use Illuminate\Http\Request;

class CelebrityController extends Controller
{
    /**
     * Récupère le sitemsen DB pour les afficher dans l'index
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $celebrities = Celebrity::orderBy('lastname')->get();
        return view('index', compact("celebrities"));
    }

    /**
     * Vue du formulaire
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Verif serveur selon critère puis valide la création de l'item
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
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


    /**
     * Récupère l'ID de l'item pour delete en DB
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id)
    {
        $celebrity = Celebrity::find($id);
        $celebrity->delete();
        return redirect()->route("home");
    }

    /**
     * Renvoi à la vue du formulaire pré-rempli des informations de l'item sélectionné
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $celebrity = Celebrity::find($id);
        return view("edit", compact('celebrity'));
    }

    /**
     * Met à jour en DB après verif du formulaire
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
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
