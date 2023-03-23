<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue {{$user->getAttribute('Nom')}} | Menu </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

    <div class="container text-center min-vh-100">

        <div class="row align-items-start" style="min-height:30vh;">
            <!-- Le menu header tablette -->
            @include('inspecteur.header')
        </div>

        <div class="row align-items-start" style="min-height:60vh;">
            <div class="container text-center">
                <div class="row">
                    <h2 class="col-12">Bienvenue {{$user->getAttribute('Nom')}}</h2>
                </div>
                <div class="row justify-content-center row-gap-4">
                    <div class="col-6">
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="{{route('inspecteur.form')}}" class="btn btn-primary w-100" role="button">
                                <p>Bouton Inspection</p>
                                <div class="image-bouton">
                                    <img src="{{ asset('images/btn-inspection.png') }}" alt="Inspection">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="{{route('inspecteur.form')}}" class="btn btn-primary w-100" role="button">
                                <p>Bouton Tournée</p>
                                <div class="image-bouton">
                                    <img src="{{ asset('images/btn-tournee.png') }}" alt="Tournées">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-6">
                    <div class="d-flex align-items-center justify-content-center">
                            <a href="{{route('inspecteur.form')}}" class="btn btn-primary w-100" role="button">
                                <p>Bouton Calendrier</p>
                                <div class="image-bouton">
                                    <img src="{{ asset('images/btn-calendrier.png') }}" alt="Calendrier">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-6">
                    <div class="d-flex align-items-center justify-content-center">
                            <a href="{{route('inspecteur.form')}}" class="btn btn-primary w-100"role="button">
                                <p>Bouton Aides</p>
                                <div class="image-bouton">
                                    <img src="{{ asset('images/btn-aides.png') }}" alt="Aides">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-6">
                    <div class="d-flex align-items-center justify-content-center">
                            <a href="{{route('inspecteur.form')}}" class="btn btn-primary w-100"role="button">
                                <p>Bouton Profil</p>
                                <div class="image-bouton">
                                    <img src="{{ asset('images/btn-profil.png') }}" alt="Profil">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-6">
                    <div class="d-flex align-items-center justify-content-center">
                            <a href="{{route('inspecteur.form')}}" class="btn btn-primary w-100"role="button">
                                <p>Bouton Déconnexion</p>
                                <div class="image-bouton">
                                    <img src="{{ asset('images/btn-deconnexion.png') }}" alt="Deconnexion">
                                </div>
                            </a>
                        </div>
                    </div> 
                </div>
    
            </div>
        </div>
        
        <div class="row align-items-end" style="min-height:8vh;">
            <!-- Le menu footer tablette -->
            @include('inspecteur.footer')
        </div>

    </div>

</body>
</html>