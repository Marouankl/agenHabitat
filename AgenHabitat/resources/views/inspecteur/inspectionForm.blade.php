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
        
        @include('inspecteur.header')
        
        <div class="row align-items-start" style="min-height:60vh;">

            <div class="container">

                <div class="row">
                    <h2>Nouvelle Inspection</h2>
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form class="row g-3 row-gap-3 mt-3 text-start" action="{{ route('inspecteur.checkAddInspection') }}" method="post">
                    <input name="_token" type="hidden" value="{{ csrf_token() }}">
                    <div class="col-6">
                        <label for="date" class="form-label">Date de l'inspection*</label>
                        <input type="text" class="form-control" id="date" name="date" placeholder="AAAA-mm-jj">
                    </div>
                    <div class="col-6">
                        <label for="heure" class="form-label">Heure</label>
                        <input type="text" class="form-control" id="heure" name="heure" placeholder="hh/mm">
                    </div>
                    <div class="col-6">
                        <label for="nomLocataire" class="form-label">Nom Locataire*</label>
                        <input type="text" class="form-control" id="nomLocataire" name="nomLocataire" placeholder="Le nom du locataire">
                    </div>
                    <div class="col-6">
                        <label for="noLogement" class="form-label">N° du Logement*</label>
                        <input type="text" class="form-control" id="noLogement" name="noLogement" placeholder="N° du logement HLM">
                    </div>
                    <div class="col-12">
                        <label for="adresse" class="form-label">Adresse du logement*</label>
                        <input type="text" class="form-control" id="adresse" name="adresse" placeholder="01 Avenue Charles LaFitte">
                    </div>
                    <div class="col-6">
                        <label for="telephone" class="form-label">Téléphone du locataire</label>
                        <input type="text" class="form-control" id="telephone" name="telephone" placeholder="+33XXXXXXXXX">
                    </div>
                    <div class="col-6">
                        <label for="mail" class="form-label">Mail du locataire</label>
                        <input type="text" class="form-control" id="mail" name="mail" placeholder="locataire@gmail.com">
                    </div>
                    <div class="col-6">
                        <label for="ville" class="form-label">Ville</label>
                        <input type="text" class="form-control" id="ville" name="ville" placeholder="Ville">
                    </div>
                    <div class="col-12">
                        <label for="remarques" class="form-label">Remarques</label>
                        <textarea class="form-control" style="height:90px;" id="remarques" name="remarques" placeholder="Remarques"></textarea>
                        <label for="remarques">Remarques</label>
                    </div>
                    <div class="col-6">
                        <label for="typeBatiment" class="form-label">Type de bâtiment</label>
                        <input type="text" class="form-control" id="typeBatiment" name="typeBatiment" placeholder="Apt,Maison,...">
                    </div>
                    <div class="col-6">
                        <label for="anneeConstru" class="form-label">Année de construction</label>
                        <input type="text" class="form-control" id="anneeConstru" name="anneeConstru" placeholder="AAAA">
                    </div>
                    <div class="col-12">
                        <label for="surfHab" class="form-label">Surface habitable</label>
                        <input type="text" class="form-control" id="surfHab" name="surfHab" placeholder="XXX m2">
                    </div>
                    <div class="col-4">
                        <label for="signature" class="form-label">Signature locataire*</label>
                        <select id="signature" name="signature" class="form-select">
                            <option selected>Sélectionner...</option>
                            <option value="signed">Signée</option>
                            <option value="rejected">Refusée</option>
                            <option value="N/A">Non Renseignée</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck" name="acceptation">
                            <label class="form-check-label" for="gridCheck">
                                Acceptation Inspection par locataire
                            </label>
                        </div>
                    </div>
                    <div class="col-12 text-start">
                        <h6>
                            <p class="fs-6">Les champs se terminant par un "*" sont obligatoires</p>
                        </h6> 
                    </div>
                    <div class="col-12 text-end">
                        <button type="submit" class="btn btn-primary">Terminer Inspection</button>
                    </div>
                </form>

            </div>

        </div>

        @include('inspecteur.footer')

    </div>
    
</body>
</html>