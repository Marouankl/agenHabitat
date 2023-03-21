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

    // Vérifie si l'Utilisateur est déjà dans la session et le vérifie contre la base de donnée
    public function checkSession(Utilisateur $utilisateurSession){
        $utilisateurs = Utilisateur::all();
        foreach ($utilisateurs as $id => $user) {
            if($user->getAttribute('Nom') == $utilisateurSession->getAttribute('Nom') 
            && $user->getAttribute('PassWord') == $utilisateurSession->getAttribute('PassWord')
            && isset($utilisateurSession->getRole()[0])){
                return true;
            }
        }
        return false;
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
                    return redirect(route('inspecteur.index', $user));
                }else if($role->libele == "Administratif"){
                    return redirect(route('administrateur.index', $user))   ;
                }else if($role->libele == "SuperAdmin"){
                    return redirect(route('superadmin.index', $user));
                }
            }
        }

        // S'il s'agit d'un requête provenant de la page d'acceuil de login
        if($request->getRequestUri() == "/checkLogin") return redirect(route('login', ['msg_notAuthenticated' => 'Désolé, une erreur est survenue lors de votre connexion, vérifiez vos identifiants.']));

        // si l'utilisateur n'est pas reconnu lors des requêtes subséquentes, redirect vers login 'return view('login');
        return false;
    }
}
