<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planifiez vos tournées | inspections</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
</head>
<body>

    <div class="container text-center min-vh-100">
        @include('inspecteur.header')
        
        <div class="row align-items-start" style="min-height:60vh;">
            
        <div class="container">
            
            <div class="row mb-5 shadow bg-body-tertiary rounded ">
                <h3>Vos tournées et inspections correspondantes</h3>
                <div class="container" style="padding-left: 0px;">
                    <div class="row">
                        <div class="col">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        <div class="row text-center" style="width: 650px;">
                                            <div class="col align-self-start"> <p>Inspection 1 </p></div>    
                                            <div class="col align-self-center fw-semibold dateDebInsp1"><p>  2023-04-01</p></div>
                                            <div class="col ml-5 mr-5 fw-semibold dateFinInsp1"><p>2023-04-15</p></div>
                                            <div class="col align-self-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                                                <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
                                                </svg>
                                            </div>
                                        </div>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body" style="overflow-x: auto;white-space: nowrap;">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                <th scope="col">N° Inspection</th>
                                                <th scope="col">Date et heure RDV</th>
                                                <th scope="col">Adresse Client</th>
                                                <th scope="col">Contact Client</th>
                                                <th scope="col">N° de locataire</th>
                                                <th scope="col">Remarques</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                <th scope="row">INSP0001</th>
                                                <td>2023-04-02 14:30</td>
                                                <td>11 Avenue Charles de Fitte</td>
                                                <td>06 44 44 67 78</td>
                                                <td>LOC0056</td>
                                                <td>HLM mis à neuf</td>
                                                </tr>
                                                <tr>
                                                <th scope="row">2</th>
                                                <td>2023-04-02 14:30</td>
                                                <td>11 Avenue Charles de Fitte</td>
                                                <td>06 44 44 67 78</td>
                                                <td>LOC0056</td>
                                                <td>HLM mis à neuf</td>
                                                </tr>
                                                <tr>
                                                <th scope="row">3</th>
                                                <td>2023-04-02 14:30</td>
                                                <td>11 Avenue Charles de Fitte</td>
                                                <td>06 44 44 67 78</td>
                                                <td>LOC0056</td>
                                                <td>HLM mis à neuf</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                            <div class="row text-center" style="width: 650px;">    
                                                <div class="col align-self-start"> <p>Inspection 2 </p></div> 
                                                <div class="col align-self-center fw-semibold dateDebInsp2"><p>  2023-04-01</p></div>
                                                <div class="col ml-5 mr-5 fw-semibold dateFinInsp2"><p>2023-04-15</p></div>
                                                <div class="col align-self-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                                                    <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
                                                    </svg>
                                                </div>
                                            </div>
                                            </button>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body" style="overflow-x: auto;white-space: nowrap;">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                <th scope="col">N° Inspection</th>
                                                <th scope="col">Date et heure RDV</th>
                                                <th scope="col">Adresse Client</th>
                                                <th scope="col">Contact Client</th>
                                                <th scope="col">N° de locataire</th>
                                                <th scope="col">Remarques</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                <th scope="row">INSP0001</th>
                                                <td>2023-04-02 14:30</td>
                                                <td>11 Avenue Charles de Fitte</td>
                                                <td>06 44 44 67 78</td>
                                                <td>LOC0056</td>
                                                <td>HLM mis à neuf</td>
                                                </tr>
                                                <tr>
                                                <th scope="row">2</th>
                                                <td>2023-04-02 14:30</td>
                                                <td>11 Avenue Charles de Fitte</td>
                                                <td>06 44 44 67 78</td>
                                                <td>LOC0056</td>
                                                <td>HLM mis à neuf</td>
                                                </tr>
                                                <tr>
                                                <th scope="row">3</th>
                                                <td>2023-04-02 14:30</td>
                                                <td>11 Avenue Charles de Fitte</td>
                                                <td>06 44 44 67 78</td>
                                                <td>LOC0056</td>
                                                <td>HLM mis à neuf</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                            <div class="row text-center" style="width: 650px;">    
                                                <div class="col align-self-start"> <p>Inspection 3 </p></div> 
                                                <div class="col align-self-center fw-semibold dateDebInsp3"><p>  2023-04-01</p></div>
                                                <div class="col ml-5 mr-5 fw-semibold dateFinInsp3"><p>2023-04-15</p></div>
                                                <div class="col align-self-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                                                    <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
                                                    </svg>
                                                </div>
                                            </div>
                                            </button>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body" style="overflow-x: auto;white-space: nowrap;">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                <th scope="col">N° Inspection</th>
                                                <th scope="col">Date et heure RDV</th>
                                                <th scope="col">Adresse Client</th>
                                                <th scope="col">Contact Client</th>
                                                <th scope="col">N° de locataire</th>
                                                <th scope="col">Remarques</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                <th scope="row">INSP0001</th>
                                                <td>2023-04-02 14:30</td>
                                                <td>11 Avenue Charles de Fitte</td>
                                                <td>06 44 44 67 78</td>
                                                <td>LOC0056</td>
                                                <td>HLM mis à neuf</td>
                                                </tr>
                                                <tr>
                                                <th scope="row">2</th>
                                                <td>2023-04-02 14:30</td>
                                                <td>11 Avenue Charles de Fitte</td>
                                                <td>06 44 44 67 78</td>
                                                <td>LOC0056</td>
                                                <td>HLM mis à neuf</td>
                                                </tr>
                                                <tr>
                                                <th scope="row">3</th>
                                                <td>2023-04-02 14:30</td>
                                                <td>11 Avenue Charles de Fitte</td>
                                                <td>06 44 44 67 78</td>
                                                <td>LOC0056</td>
                                                <td>HLM mis à neuf</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                <div class="row mt-3">
                    <h3>Votre Inspection séléctionnée</h3>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                    <!-- L'inspection : {{$insp}}
                    L'objet : {{$objet}}
                    L'utilisateur : {{$user}}

                    <form class="row g-3 row-gap-3 mt-3 text-start" action="{{ route('inspecteur.checkAddInspection') }}" method="post">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}">
                        <div class="col-6">
                            <label for="date" class="form-label">Date de l'inspection*</label>
                            <input type="text" value="{{$insp->InfoCalendrier}}" class="form-control" id="date" name="date" placeholder="AAAA-mm-jj">
                        </div>
                        <div class="col-6">
                            <label for="heure" class="form-label">Heure</label>
                            <input type="text" value="{{$insp->heure}}" class="form-control" id="heure" name="heure" placeholder="hh/mm">
                        </div>
                        <div class="col-6">
                            <label for="nomLocataire" class="form-label">Nom Locataire*</label>
                            <input type="text" value="{{$insp->NomLocataire}}" class="form-control" id="nomLocataire" name="nomLocataire" placeholder="Le nom du locataire">
                        </div>
                        <div class="col-6">
                            <label for="noLogement" class="form-label">N° du Logement*</label>
                            <input type="text" value="{{$insp->NoLogement}}" class="form-control" id="noLogement" name="noLogement" placeholder="N° du logement HLM">
                        </div>
                        <div class="col-12">
                            <label for="adresse" class="form-label">Adresse du logement*</label>
                            <input type="text" value="{{$insp->Adresse}}" class="form-control" id="adresse" name="adresse" placeholder="01 Avenue Charles LaFitte">
                        </div>
                        <div class="col-6">
                            <label for="telephone" class="form-label">Téléphone du locataire</label>
                            <input type="text" value="{{$insp->Telephone}}" class="form-control" id="telephone" name="telephone" placeholder="+33XXXXXXXXX">
                        </div>
                        <div class="col-6">
                            <label for="mail" class="form-label">Mail du locataire</label>
                            <input type="text" value="{{$insp->Mail}}" class="form-control" id="mail" name="mail" placeholder="locataire@gmail.com">
                        </div>
                        <div class="col-6">
                            <label for="ville" class="form-label">Ville</label>
                            <input type="text" value="{{$insp->Ville}}" class="form-control" id="ville" name="ville" placeholder="Ville">
                        </div>
                        <div class="col-12">
                            <label for="remarques" class="form-label">Remarques</label>
                            <textarea class="form-control" value="{{$insp->Rmq}}" style="height:90px;" id="remarques" name="remarques" placeholder="Remarques"></textarea>
                            <label for="remarques">Remarques</label>
                        </div>
                        <div class="col-6">
                            <label for="typeBatiment" class="form-label">Type de bâtiment</label>
                            <input type="text" value="{{$insp->TypeBatiment}}" class="form-control" id="typeBatiment" name="typeBatiment" placeholder="Apt,Maison,...">
                        </div>
                        <div class="col-6">
                            <label for="anneeConstru" class="form-label">Année de construction</label>
                            <input type="text" value="{{$insp->AnneeConstruction}}" class="form-control" id="anneeConstru" name="anneeConstru" placeholder="AAAA">
                        </div>
                        <div class="col-12">
                            <label for="surfHab" class="form-label">Surface habitable</label>
                            <input type="text" value="{{$insp->SurfaceHabitable}}" class="form-control" id="surfHab" name="surfHab" placeholder="XXX m2">
                        </div>
                        <div class="col-4">
                            <label for="signature" class="form-label">Signature locataire*</label>
                            <select id="signature" value="{{$insp->Signature}}" name="signature" class="form-select">
                                <option selected>Sélectionner...</option>
                                <option value="signed">Signée</option>
                                <option value="rejected">Refusée</option>
                                <option value="N/A">Non Renseignée</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" value="{{$insp->Acceptation}}" type="checkbox" id="gridCheck" name="acceptation">
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
                    </form> -->
                </div>
                
            </div>
        </div>


        @include('inspecteur.footer')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>