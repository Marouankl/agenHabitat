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

                <form class="row g-3 row-gap-3 mt-3 text-start" action="{{ route('inspecteur.checkAddInspection') }}" method="post">
                    <div class="col-6">
                        <label for="inputEmail4" class="form-label">Date de l'inspection</label>
                        <input type="text" class="form-control" id="inputEmail4" placeholder="jj/mm/AAAA">
                    </div>
                    <div class="col-6">
                        <label for="inputPassword4" class="form-label">Heure</label>
                        <input type="text" class="form-control" id="inputPassword4" placeholder="hh/mm">
                    </div>
                    <div class="col-6">
                        <label for="inputEmail5" class="form-label">Nom Locataire</label>
                        <input type="text" class="form-control" id="inputEmail5" placeholder="Le nom du locataire">
                    </div>
                    <div class="col-6">
                        <label for="inputPassword5" class="form-label">N° du Logement</label>
                        <input type="text" class="form-control" id="inputPassword5" placeholder="N° du logement HLM">
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Adresse du logement</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="01 Avenue Charles LaFitte">
                    </div>
                    <div class="col-6">
                        <label for="inputEmail6" class="form-label">Téléphone du locataire</label>
                        <input type="text" class="form-control" id="inputEmail6" placeholder="+33XXXXXXXXX">
                    </div>
                    <div class="col-6">
                        <label for="inputPassword6" class="form-label">Mail du locataire</label>
                        <input type="text" class="form-control" id="inputPassword6" placeholder="locataire@gmail.com">
                    </div>
                    <div class="col-6">
                        <label for="inputCity" class="form-label">Ville</label>
                        <input type="text" class="form-control" id="inputCity" placeholder="Ville">
                    </div>
                    <div class="col-12">
                        <label for="inputRmq" class="form-label">Remarques</label>
                        <textarea" class="form-control" style="height:90px;" id="inputRmq" placeholder="Remarques"></textarea>
                        <label for="inputRmq">Remarques</label>
                    </div>
                    <div class="col-6">
                        <label for="inputTypeBatiment" class="form-label">Type de bâtiment</label>
                        <input type="text" class="form-control" id="inputTypeBatiment" placeholder="Apt,Maison,...">
                    </div>
                    <div class="col-6">
                        <label for="inputAnneeConstru" class="form-label">Année de construction</label>
                        <input type="text" class="form-control" id="inputAnneeConstru" placeholder="AAAA">
                    </div>
                    <div class="col-12">
                        <label for="inputSurfHab" class="form-label">Surface habitable</label>
                        <input type="text" class="form-control" id="inputSurfHab" placeholder="XXX m2">
                    </div>
                    <div class="col-4">
                        <label for="inputState" class="form-label">Signature locataire</label>
                        <select id="inputState" class="form-select">
                        <option selected>Sélectionner...</option>
                        <option>Signée</option>
                        <option>Refusée</option>
                        <option>N/A</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Acceptation locataire
                        </label>
                        </div>
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