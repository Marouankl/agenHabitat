<?php

namespace App\Http\Controllers;

use App\Models\Inspection;
use App\Models\Rapport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class AdministratifController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $inspection= Inspection::with('rapport','utilisateur','tournee')->get();
        $rapport= Rapport::with('inspection')->get();
        $utilisateur= Rapport::with('inspection')->get();
        $tournee= Rapport::with('inspection')->get();

        return view('administratif.index',compact('inspection','rapport','utilisateur','tournee'));


        /* if(Auth::check()){
             return redirect('administratif.index');
         }
         return redirect('administratif.login')->with('success','you are not allowed to access');*/

    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('administratif.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $inspections = new Inspection;
        $inspections->tournee->NomClient= $request->input('NomClient');
        $inspections->tournee->DateRDV = $request->input('DateRDV');
        $inspections->tournee->AdresseClient = $request->input('AdresseClient');
        $inspections->tournee->Telephone = $request->input('Telephone');
        $inspections->tournee->Mail = $request->input('Mail');
        $inspections->tournee->NumLocataire = $request->input('NumLocataire');
        $inspections->tournee->Remarque= $request->input('Remarque');
        $inspections->utilisateur->Nom= $request->input('Nom');
        $inspections->NumInspection = $request->input('NumInspection');
        $inspections->TypeBatiment= $request->input('TypeBatiment');
        $inspections->AnneeConstruction= $request->input('AnneeConstruction');
        $inspections->SurfaceHabitable= $request->input('SurfaceHabitable');
        $inspections->ReleveConsoChauffage= $request->input('ReleveConsoChauffage');
        $inspections->ReleveConsoEau= $request->input('ReleveConsoEau');
        $inspections->ReleveConsoRefroidissement= $request->input('ReleveConsoRefroidissement');
        $inspections->ReleveGES= $request->input('ReleveGES');
        $inspections->save();
        return redirect()->route('administratif.index');
    }

    /**
     * Display the specified resource.
     */
    public function show( $NumInspection)
    {
        $inspections = Inspection::find($NumInspection);
        $inspection= Inspection::with('rapport','utilisateur','tournee')->get();
        $rapport= Rapport::with('inspection')->get();
        $utilisateur= Rapport::with('inspection')->get();
        $tournee= Rapport::with('inspection')->get();
        return view('administratif.show', ['inspections' => $inspections],compact('inspection','rapport','utilisateur','tournee'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $NumInspection)
    {
        $inspections = Inspection::find($NumInspection);
        $inspection= Inspection::with('rapport','utilisateur','tournee')->get();
        $rapport= Rapport::with('inspection')->get();
        $utilisateur= Rapport::with('inspection')->get();
        $tournee= Rapport::with('inspection')->get();
        return view('administratif.edit', ['inspections' => $inspections],compact('inspection','rapport','utilisateur','tournee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $NumInspection)
    {
        $inspections = Inspection::find($NumInspection);
        $inspections->tournee->NomClient= $request->input('NomClient');
        $inspections->tournee->DateRDV = $request->input('DateRDV');
        $inspections->tournee->AdresseClient = $request->input('AdresseClient');
        $inspections->tournee->Telephone = $request->input('Telephone');
        $inspections->tournee->Mail = $request->input('Mail');
        $inspections->tournee->NumLocataire = $request->input('NumLocataire');
        $inspections->tournee->Remarque= $request->input('Remarque');
        $inspections->utilisateur->Nom= $request->input('Nom');
        $inspections->NumInspection = $request->input('NumInspection');
        $inspections->TypeBatiment= $request->input('TypeBatiment');
        $inspections->AnneeConstruction= $request->input('AnneeConstruction');
        $inspections->SurfaceHabitable= $request->input('SurfaceHabitable');
        $inspections->ReleveConsoChauffage= $request->input('ReleveConsoChauffage');
        $inspections->ReleveConsoEau= $request->input('ReleveConsoEau');
        $inspections->ReleveConsoRefroidissement= $request->input('ReleveConsoRefroidissement');
        $inspections->ReleveGES= $request->input('ReleveGES');
        $inspections->save();
        return redirect()->route('administratif.show');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $NumInspection)
    {
        $inspection= Inspection::find($NumInspection);
        $inspection->delete();
        return redirect()->route('administratif.index')->with('success','rapport deleted successfully');;

    }

    public function stat(){
        $inspection= Inspection::with('rapport','utilisateur','tournee')->get();
        $rapport= Rapport::with('inspection')->get();
        $utilisateur= Rapport::with('inspection')->get();
        $tournee= Rapport::with('inspection')->get();

        return view('administratif.statique',compact('inspection','rapport','utilisateur','tournee'));


    }



}
