<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue {{$user->getAttribute('Nom')}} </title>
</head>
<body>

    Le menu header tablette

    <h2>Bienvenue {{$user->getAttribute('Nom')}}</h2>
    <div class="menu">
        <div class="bouton">Bouton Inspection</div>
        <div class="bouton">Bouton Tournées</div>
        <div class="bouton">Bouton calendrier</div>
        <div class="bouton">Bouton aides</div>
        <div class="bouton">Bouton Profil</div>
        <div class="bouton">Bouton Déconnexion</div>
    </div>
    
    Le menu footer tablette
</body>
</html>