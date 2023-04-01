<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <style>
        /* Style pour la section des tournées */
        #tournées {
            width: 50%;
            margin: 50px auto;
            border-collapse: collapse;
        }
        #tournées th {
            background-color: #4CAF50;
            color: white;
            padding: 8px;
            text-align: center;
        }
        #tournées td, #tournées th {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        #tournées tr:nth-child(even){background-color: #f2f2f2;}
        #tournées tr:hover {background-color: #ddd;}
    </style>
</head>
<body>
<header class="bg-light">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-2">
                <div class="logo">
                    <img src="https://www.agenhabitat.fr/fileadmin/templates/master/assets/assets_site_agen_habitat/img/svg/done/logo.svg" alt="Logo administrateur" class="img-fluid">
                </div>
            </div>
            <div class="col-10">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('administratif.index')}}">Accueil </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Rapports</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Statistiques</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>

<section>
    <div class="container">
        @if (isset($inspections))
            <form action="{{ route('administratif.update',$inspections) }}" method="POST" class="mx-auto">
                @method('PUT')
                @else
                    <form action="{{ route('administratif.store') }}" method="POST" class="mx-auto">
                        @endif
                        <fieldset>
                            <legend>Pour client</legend>
                            <div class="form-group">
                                <label for="nom">Nom :</label>
                                <input id="nom" type="text" name="title" class="form-control" value="{{$inspections->tournee->NomClient}}">
                            </div>
                            <div class="form-group">
                                <label for="date">Date de rendez-vous :</label>
                                <input id="date" name="date" class="form-control" value="{{$inspections->tournee->DateRDV}}">
                            </div>
                            <div class="form-group">
                                <label for="telephone">Téléphone :</label>
                                <input id="telephone" name="telephone" class="form-control" value="{{$inspections->tournee->Telephone}}">
                            </div>
                            <div class="form-group">
                                <label for="adresse">Adresse :</label>
                                <input id="adresse" name="adresse" class="form-control" value="{{$inspections->tournee->AdresseClient}}">
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail :</label>
                                <input id="email" name="email" class="form-control" value="{{$inspections->tournee->Mail}}">
                            </div>
                            <div class="form-group">
                                <label for="NumLocataire">Numero Locataire :</label>
                                <input id="NumLocataire" name="NumLocataire" type="text" class="form-control" value="{{$inspections->tournee->NumLocataire}}">
                            </div>
                            <div class="form-group">
                                <label for="remarque">Remarque :</label>
                                <input id="remarque" name="remarque" class="form-control" value="{{$inspections->tournee->Remarque}}">
                            </div>
                        </fieldset>
                        <div class="container mt-4">
                            <fieldset>
                                <legend>Informations sur l'inspection</legend>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="TypeBatiment">Type de Batiment :</label>
                                            <input type="text" class="form-control" id="TypeBatiment" name="TypeBatiment" value="{{$inspections->TypeBatiment}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="AnneeConstruction">Annee Construction :</label>
                                            <input type="text" class="form-control" id="AnneeConstruction" name="AnneeConstruction" value="{{$inspections->AnneeConstruction}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="SurfaceHabitable">Surface habitable :</label>
                                            <input type="text" class="form-control" id="SurfaceHabitable" name="SurfaceHabitable" value="{{$inspections->SurfaceHabitable}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="ReleveConsoChauffage">Releve Consomation Chauffage :</label>
                                            <input type="text" class="form-control" id="ReleveConsoChauffage" name="ReleveConsoChauffage" value="{{$inspections->ReleveConsoChauffage}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="ReleveConsoEau">Releve Consomation Eau :</label>
                                            <input type="text" class="form-control" id="ReleveConsoEau" name="ReleveConsoEau" value="{{$inspections->ReleveConsoEau}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="ReleveGES">Releve GES :</label>
                                            <input type="text" class="form-control" id="ReleveGES" name="ReleveGES" value="{{$inspections->ReleveGES}}">
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                        </div>

                        <fieldset>
                            <button type="submit" class="btn btn-primary">Modifier</button>
                        </fieldset>
                    </form>

</section>

</body>
</html>
