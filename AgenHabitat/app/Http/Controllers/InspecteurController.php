<?php

namespace App\Http\Controllers;

use App\Models\Inspection;
use Exception;
use Illuminate\Http\Request;

class InspecteurController extends Controller
{

    //gère la modification d'une inspection
    public function checkModInspection(Request $req){
        return view('inspecteur.calendrier')->with("message_success", "L'inspection sélectionnée a bien été mofifiée");
    }
    // vers Le Calendrier
    public function planifier(Request $req){
        return view('inspecteur.calendrier', [
            'user' => session('utilisateur'),
            'insp' => new Inspection,
            'objet' => $req->objet  
        ]);
    }

    // gère l'ajout d'une Nouvelle Inspection
    public function checkAddInspection(Request $req){
        $message = ""; // Le message si l'ajout de la nouvelle inspection s'est bien passée ou non 

        $req->validate([ // La validation des champs du formulaire
            'date' => 'required|date|after:yesterday',
            'nomLocataire' => 'required|string|max:100',
            'noLogement' => 'required|string|max:100',
            'adresse' => 'required|string',
            'signature' => 'required',
        ]);

        try{
            // Enregistrement dans la base de donnée de tous les champs validés
            $insp = Inspection::initialMandatory($req->date, session('utilisateur')->Id, 1);
            /**
             * tous les attributs de l'inspection ici 
             *  */ 
            $insp->TypeBatiment = $req->typeBatiment;
            $insp->AnneeConstruction = $req->anneeConstru;
            $insp->SurfaceHabitable = $req->surfHab;
            $insp->ReleveConsoChauffage = 40;
            $insp->ReleveConsoEau = 20;
            $insp->ReleveConsoRefroidissement = 10;
            $insp->ReleveGES = 15;
            
            // Enregistre la nouvelle Inspection dans la base de donnée 
            $insp->save();

            // Si l'ajout en base de donnée s'est bien passée
            $message .= "Inspection envoyée avec succès";
            return redirect(route('inspecteur.index', ['msg' => $message] ));
        }catch(Exception $e){
            // Si il y a eu problème
            $message .= "Désolé, l'ajout de la nouvelle inspection a rencontré quelques problèmes";
                // Rester sur la page de formulaire avec tous les champs encore remplis comme avant
    
            return redirect(route('inspecteur.index', ['msg' => $message] ));

        }
    }

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
