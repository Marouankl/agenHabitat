<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue {{$user->getAttribute('Nom')}} | Menu </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <style>
        .img-icon{
            width: 100px;
            height: 100px;
            margin: 0 0 20px 0;
        }
        .img-icon-profil{
            width: 4em;
            height: 4em;
        }
        .btn-primary{
            background: #249F29;
            border: none;
            max-width: 200px;
        }
        .btn-primary:hover{
            background: #8E25A8;
        }
        .logo {
            max-width: 300px;
            margin: 20px 0px;
        }
        p{
            margin-top: 2%;
        }
        a{
            text-decoration: none;
        }

        @media screen and (max-width: 426px) {
            p{
                font-size: 12px;
            }
            .logo{
                width: 56%;
            }
            div.col{
                padding: 0;
                margin: 0;
            }
            div.col-6{
                font-size: 12px;
            }
            .img-icon, .img-icon-profil{
            width: 3em;
            height: 3em;
            }
        }
    </style>
</head>
<body>

    <div class="container text-center min-vh-100">

        
        <!-- Le menu header tablette -->
        @include('inspecteur.header')
        

        <div class="row align-items-start" style="min-height:60vh;">
            <div class="container text-center">
                <div class="row">
                    <h2 class="col-12">Bienvenue {{$user->getAttribute('Nom')}}</h2>
                    @if (Request::get("msg"))
                        <div class="alert alert-primary">
                            <ul>
                                <li>{{ Request::get("msg") }}</li>
                            </ul>
                        </div>
                    @endif
                </div>
                <div class="row justify-content-center row-gap-4">
                    <div class="col-6">
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="{{ route( 'inspecteur.form' )}}" class="btn btn-primary w-100" role="button">
                                <p>Bouton Inspection</p>
                                <div class="image-bouton">
                                    <img class="img-icon" src="{{ asset('images/inspection.png') }}" alt="Inspection">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="{{ route( 'inspecteur.form' )}}" class="btn btn-primary w-100" role="button">
                                <p>Bouton Tournée</p>
                                <div class="image-bouton">
                                    <img class="img-icon" src="{{ asset('images/go-to-work.png') }}" alt="Tournées">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-6">
                    <div class="d-flex align-items-center justify-content-center">
                            <a href="{{route('inspecteur.form')}}" class="btn btn-primary w-100" role="button">
                                <p>Bouton Calendrier</p>
                                <div class="image-bouton">
                                    <img class="img-icon" src="{{ asset('images/timetable.png') }}" alt="Calendrier">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-6">
                    <div class="d-flex align-items-center justify-content-center">
                            <a href="{{route('inspecteur.form')}}" class="btn btn-primary w-100"role="button">
                                <p>Bouton Aides</p>
                                <div class="image-bouton">
                                    <img class="img-icon" src="{{ asset('images/question.png') }}" alt="Aides">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-6">
                    <div class="d-flex align-items-center justify-content-center">
                            <a href="{{route('inspecteur.form')}}" class="btn btn-primary w-100"role="button">
                                <p>Bouton Profil</p>
                                <div class="image-bouton">
                                    <img class="img-icon" src="{{ asset('images/femelle.png') }}" alt="Profil">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-6">
                    <div class="d-flex align-items-center justify-content-center">
                            <a href="{{route('inspecteur.form')}}" class="btn btn-primary w-100"role="button">
                                <p>Bouton Déconnexion</p>
                                <div class="image-bouton">
                                    <img class="img-icon" src="{{ asset('images/log-out.png') }}" alt="Deconnexion">
                                </div>
                            </a>
                        </div>
                    </div> 
                </div>
    
            </div>
        </div>
        
        
        <!-- Le menu footer tablette -->
        @include('inspecteur.footer')
    

    </div>

</body>
</html>