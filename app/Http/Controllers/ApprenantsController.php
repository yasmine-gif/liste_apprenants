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
        return view('apprenants.enregistrer',compact('apprenants','tuteurs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function modifier(int $id){
        $tuteurs=Tuteur::get();
        $apprenant=Apprenant::find($id);
        return view('apprenants.modifier',compact('apprenant','tuteurs'));
    }
    public function store(Request $request)
    {
        $data=request()->validate([
            'nomApprenant'=> ['required','string'],
            'prenomApprenant'=> ['required','string'],
            'dateDeNaissance'=> ['required','date'],
            'ville'=> ['required','string'],
            'formation'=> ['required','string'],
            'lieuDeNaissance'=> ['required','string'],
            'photo'=> ['required','image'],
            'etablissement'=> ['required','string'],
            'tuteur_id'=> ['required','string'],
        ]);
        $imagePath=request('photo')->store('uploads','public');
        $apprenants=Apprenant::create([
            'nomApprenant'=> $data['nomApprenant'],
            'prenomApprenant'=> $data['prenomApprenant'],
            'dateDeNaissance'=> $data['dateDeNaissance'],
            'ville'=> $data['ville'],
            'formation'=> $data['formation'],
            'lieuDeNaissance'=> $data['lieuDeNaissance'],
            'photo'=> $imagePath,
            'etablissement'=> $data['etablissement'],
            'tuteur_id'=> $data['tuteur_id'],
        ]);
        return redirect()->route('apprenants.liste');
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
    {   $apprenant=Apprenant::find($id);
        $data=request()->validate([
            'nomApprenant'=> ['required','string'],
            'prenomApprenant'=> ['required','string'],
            'dateDeNaissance'=> ['required','date'],
            'ville'=> ['required','string'],
            'formation'=> ['required','string'],
            'lieuDeNaissance'=> ['required','string'],
            'etablissement'=> ['required','string'],
            'tuteur_id'=> ['required','string'],
        ]);
        
     if($request['photo']){
        $imagePath=request('photo')->store('uploads','public');
     } else{
        $apprenant->update($data);
     }

        return redirect()->route('apprenants.liste');


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
