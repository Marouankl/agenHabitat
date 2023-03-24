<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use Illuminate\Http\Request;

class InspecteurController extends Controller
{

    // après appui bouton menu 'Inspection'
    public function newInspection(Request $req){
        return view('inspecteur.inspectionForm')->with('user', session('utilisateur'));
    }

    // va vers la page de menu pour l'inspecteur (Ecran Tablette )
    public function index(){
        $userInSession = session('utilisateur'); // l'utilisateur en session
        return view('inspecteur.index')->with('user', $userInSession);
    }
    

}
