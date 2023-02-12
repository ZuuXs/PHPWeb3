<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nom;

class NomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noms = Nom::all();
        return view('nom.index', compact('noms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nom.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|max:30',
            'prenom' => 'required|max:30',
            'age' => 'required|integer|between:0,255'
        ]);

        Nom::create($validated);

        return redirect()->route('nom.index')->with('success', 'Personne ajoutée avec succès.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Nom $nom)
    {
        return view('nom.edit', compact('nom'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nom $nom)
    {
        $validated = $request->validate([
            'nom' => 'required|max:30',
            'prenom' => 'required|max:30',
            'age' => 'required|integer|between:0,255'
        ]);

        $nom->update($validated);

        return redirect()->route('nom.index')->with('success', 'Personne modifiée avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nom $nom)
    {
        $nom->delete();

        return redirect()->route('nom.index')->with('success', 'Personne supprimée avec succès.');
    }
}
