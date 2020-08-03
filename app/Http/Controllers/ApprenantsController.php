<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Apprenant;
use App\Tuteur;

class ApprenantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apprenants=Apprenant::get();
        $tuteurs=Tuteur::get();
        return view('apprenants.liste',compact('apprenants','tuteurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $apprenants=Apprenant::get();
        $tuteurs=Tuteur::get();
        return view('apprenants.enregistrement',compact('apprenants','tuteurs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=request()->validate([
            'nom'=> ['required','string'],
            'prenom'=> ['required','string'],
            'date_naissance'=> ['required','date'],
            'ville_origine'=> ['required','string'],
            'formation'=> ['required','string'],
            'etablissement_prec'=> ['required','string'],
            'photo'=> ['required','image'],
            'tuteur_id'=> ['required','string'],
        ]);
        $imagePath=request('photo')->store('uploads','public');
        $apprenants=Apprenant::create([
            'nom'=> $data['nom'],
            'prenom'=> $data['prenom'],
            'date_naissance'=> $data['date_naissance'],
            'ville_origine'=> $data['ville_origine'],
            'formation'=> $data['formation'],
            'etablissement_prec'=> $data['etablissement_prec'],
            'photo'=> $imagePath,
            'tuteur_id'=> $data['tuteur_id'],
        ]);
        return redirect()->route('apprenants.index');
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
