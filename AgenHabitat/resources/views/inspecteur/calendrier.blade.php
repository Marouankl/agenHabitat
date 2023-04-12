<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planifiez vos tournées | inspections</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        .ligne:hover{
            opacity: 0.5;
        }
        
    </style>
</head>
<body>

    <div class="container text-center min-vh-100">
        @include('inspecteur.header')
        
        <div class="row align-items-start" style="min-height:60vh;">
            
        <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <div class="row mb-5 shadow bg-body-tertiary rounded ">
                <h3>Vos tournées et inspections à faire</h3>
                <div class="container" style="padding-left: 0px;">
                    <div class="row">
                        <div class="col">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        <div class="row text-center" style="width: 650px;">
                                            <div class="col align-self-start"> <p>Tournée 1 </p></div>    
                                            <div class="col align-self-center fw-semibold dateDebInsp1"><p>DU : 2023-04-01</p></div>
                                            <div class="col ml-5 mr-5 fw-semibold dateFinInsp1"><p>AU : 2023-04-15</p></div>
                                            <div class="col align-self-center" data-bs-toggle="modal" data-bs-target="#exampleModal">
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
                                                    <tr class="ligne">
                                                    <th scope="row">INSP0001</th>
                                                    <td>2023-04-02 14:30</td>
                                                    <td>95 Blvd B. D.</td>
                                                    <td>06 56 56 53 27</td>
                                                    <td>LOC0123</td>
                                                    <td>HLM mis à neuf</td>
                                                    </tr>
                                                    <tr class="ligne">
                                                    <th scope="row">INSP0014</th>
                                                    <td>2023-04-05 09:00</td>
                                                    <td>11 All For</td>
                                                    <td>08 09 78 65 23</td>
                                                    <td>LOC0056</td>
                                                    <td>N/A</td>
                                                    </tr>
                                                    <tr class="ligne">
                                                    <th scope="row">INSP0022</th>
                                                    <td>2023-04-14 16:00</td>
                                                    <td>09 Av F. V.</td>
                                                    <td>06 57 78 97 09</td>
                                                    <td>LOC0332</td>
                                                    <td>N/A</td>
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
                                                <div class="col align-self-start"> <p>Tournée 2 </p></div> 
                                                <div class="col align-self-center fw-semibold dateDebInsp2"><p>DU : 2023-04-17</p></div>
                                                <div class="col ml-5 mr-5 fw-semibold dateFinInsp2"><p>AU : 2023-04-22</p></div>
                                                <div class="col align-self-center" data-bs-toggle="modal" data-bs-target="#exampleModal">
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
                                                <tr class="ligne"><!-- make each ligne clickable -->
                                                <th scope="row">INSP0001</th>
                                                <td>2023-04-02 14:30</td>
                                                <td>11 Avenue Charles de Fitte</td>
                                                <td>06 44 44 67 78</td>
                                                <td>LOC0056</td>
                                                <td>HLM mis à neuf</td>
                                                </tr>
                                                <tr class="ligne">
                                                <th scope="row">2</th>
                                                <td>2023-04-02 14:30</td>
                                                <td>11 Avenue Charles de Fitte</td>
                                                <td>06 44 44 67 78</td>
                                                <td>LOC0056</td>
                                                <td>HLM mis à neuf</td>
                                                </tr>
                                                <tr class="ligne">
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
                                                <div class="col align-self-start"> <p>Tournée 3 </p></div> 
                                                <div class="col align-self-center fw-semibold dateDebInsp3"><p>DU : 2023-04-24</p></div>
                                                <div class="col ml-5 mr-5 fw-semibold dateFinInsp3"><p>AU : 2023-04-29</p></div>
                                                <div class="col align-self-center" data-bs-toggle="modal" data-bs-target="#exampleModal">
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
                                                <tr class="ligne">
                                                <th scope="row">INSP0001</th>
                                                <td>2023-04-02 14:30</td>
                                                <td>11 Avenue Charles de Fitte</td>
                                                <td>06 44 44 67 78</td>
                                                <td>LOC0056</td>
                                                <td>HLM mis à neuf</td>
                                                </tr>
                                                <tr class="ligne">
                                                <th scope="row">2</th>
                                                <td>2023-04-02 14:30</td>
                                                <td>11 Avenue Charles de Fitte</td>
                                                <td>06 44 44 67 78</td>
                                                <td>LOC0056</td>
                                                <td>HLM mis à neuf</td>
                                                </tr>
                                                <tr class="ligne">
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

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modification d'une Tournée</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3 text-left">
                        <div class="col-md-12">
                            <label for="inputEmail4" class="form-label">Désignation Tournée</label>
                            <input type="text" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Date début Tournée</label>
                            <input type="date" class="form-control" id="inputPassword4">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Date fin Tournée</label>
                            <input type="date" class="form-control" id="inputPassword4">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress2" class="form-label">Assignation tournée</label>
                            <input type="text" class="form-control" id="inputAddress2" placeholder="Moi-même / Autre employé">
                        </div>
                        <div class="col-md-12">
                            <label for="inputCity" class="form-label">Remarque Tournée</label>
                            <input type="text" class="form-control" id="inputCity">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Supprimer Tournée</button>
                    <button type="button" class="btn btn-primary">Enregistrer les modifications</button>
                </div>
                    </form>
                </div>
            </div>
            </div>

            <div class="row mt-3">
                <h3>Votre Inspection sélectionnée  <b class="badge text-bg-info" id="noInsp"></b></h3>
                <form class="row g-3 row-gap-3 mt-3 text-start" action="" method="post">
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
                        <button type="button" class="btn btn-danger" id="liveToastBtnS">Supprimer l'inspection</button>
                        <button type="button" class="btn btn-primary" id="liveToastBtn">Modifier l'inspection</button>

                        <div class="toast-container position-fixed bottom-0 end-0 p-3">
                            <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="toast-header">
                                <strong class="me-auto">Confirmation</strong>
                                <small>A l'instant</small>
                                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                </div>
                                <div class="toast-body bg-success" style="color:white;">
                                L'inspection a bien été modifiée!
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <button type="button" class="btn rounded-circle"
                data-bs-toggle="modal" data-bs-target="#exampleModal2"
                style="position:sticky;background:#abdbe3;margin-left:582px;padding:25px;bottom:30px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="65" height="65" fill="currentColor" class="bi bi-calendar-week" viewBox="0 0 16 16">
                    <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                </svg>
            </button>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Votre Calendrier</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="{{ asset('images/text_overlayinspecteurs.png') }}" height="500px" width="400px"  alt="Calendrier">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                        <button type="button" class="btn btn-primary">Enregistrer les modifications</button>
                    </div>
                    </div>
                </div>
            </div>
                
            </div>
        </div>
        @include('inspecteur.footer')
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>