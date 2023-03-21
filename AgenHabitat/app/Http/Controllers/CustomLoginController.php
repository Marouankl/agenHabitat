<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use Illuminate\Http\Request;

class CustomLoginController extends Controller
{
    // Retourne la page de login lié à la route 'login'
    public function login(){
        return view('administratif.login'); // retourne juste une vue qui a été créé par marouan
    }

    // Vérifie les identifiants entrés saisies sur la vue administratif.login
    public function checkLogin(Request $request){
        // Vérification initiale 
        $emailInput = $request->Input('email');
        $passwordInput = $request->Input('password');
        $utilisateurs = Utilisateur::all();
        // echo '<pre>';
        //     var_dump($emailInput);
        //     var_dump($passwordInput);
        //     die();
        // echo '</pre>';
        foreach($utilisateurs as $id => $user){
            if($user->getAttribute('Nom') == $emailInput && $user->getAttribute('PassWord') == $passwordInput){
                // il est là
                // si utilisateur présent dans la base de donnée -> mis en session -> redirection vers la page correspondant
                session(['utilisateur' => $user]);
                // Check du role de l'utilisateur 
                $role = $user->getRole()[0];
                if($role->libele == "Inspecteur"){
                    return route('inspecteur.index', $user);
                }else if($role->libele == "Administratif"){
                    return route('administratif.index', $user);
                }else if($role->libele == "SuperAdmin"){
                    return route('superadmin.index', $user);
                }
            }
        }

        

            // else, return directement la vue vers login 'return view('login');
        return false;
    }
}
