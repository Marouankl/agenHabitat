<?php

namespace App\Http\Middleware;

use App\Http\Controllers\CustomLoginController;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CustomAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // A chaque fois qu'une requête est fait, on va vérifier si l'Utilisateur qui fait la requête est connu (dans la base de donnée) ou pas
        $customAuth = new CustomLoginController(); //le Controller qu'on utilise
        // S'il n'y a pas de session
            //check session si il y a un utilisateur dedans 
                // si il n'y a pas d'utilisateur dans la session : 
        $isConnected = $customAuth->checkLogin($request); // check dans la base de donnée

                // si il y a un utilisateur dans la session
                    // check dans la session globale 

        if($isConnected){
            return $next($request);
        }else{
            // Si l'utilisateur n'est pas reconnu, il va retourner tout le temps vers  
            return redirect(route('login', ['msg_notAuthenticated' => 'Désolé, vous devez vous connecter pour accéder à cette page']));
        }
    }
}
