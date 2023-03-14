<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord administrateur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
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
                                <a class="nav-link" href="#">Accueil </a>
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

<main>

    <section class="reports">
        <h2 style="text-align: center">Rapports</h2>
        <div class="table-responsive">
            <table class="table text-center table-bordered">
                <thead>
                <tr>
                    <th>Titre</th>
                    <th>Auteur</th>
                    <th>Date</th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Titre du rapport 1</td>
                    <td>Auteur 1</td>
                    <td>12/03/2023</td>
                    <td><span class="badge bg-success">Signé</span></td>
                    <td>
                        <a href="#" class="btn btn-primary">Détails</a>
                        <a href="#" class="btn btn-warning">Modifier</a>
                        <a href="#" class="btn btn-danger">Supprimer</a>
                    </td>
                </tr>
                <tr>
                    <td>Titre du rapport 2</td>
                    <td>Auteur 2</td>
                    <td>10/03/2023</td>
                    <td><span class="badge bg-warning text-dark">En attente</span></td>
                    <td>
                        <a href="#" class="btn btn-primary">Détails</a>
                        <a href="#" class="btn btn-warning">Modifier</a>
                        <a href="#" class="btn btn-danger">Supprimer</a>
                    </td>
                </tr>
                <tr>
                    <td>Titre du rapport 3</td>
                    <td>Auteur 3</td>
                    <td>08/03/2023</td>
                    <td><span class="badge bg-danger">Non signé</span></td>
                    <td>
                        <a href="#" class="btn btn-primary">Détails</a>
                        <a href="#" class="btn btn-warning">Modifier</a>
                        <a href="#" class="btn btn-danger">Supprimer</a>
                    </td>
                </tr>
                <!-- Ajouter plus de rapports ici -->
                </tbody>
            </table>
        </div>
        <div style="text-align: center;">
            <a href="#" class="btn btn-primary">Ajouter un rapport</a>
        </div>
    </section>

    <section class="stats">
        <h2>Statistiques</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-body">
                        <h3 class="card-title">Nombre d'utilisateurs</h3>
                        <p class="card-text">123</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-body">
                        <h3 class="card-title">Nombre de rapports</h3>
                        <p class="card-text">456</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-body">
                        <h3 class="card-title">Inspecteurs en activité</h3>
                        <p class="card-text">6</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <h3 class="card-title">Tournées en cours</h3>
                        <p class="card-text">12</p>
                    </div>
                </div>
            </div>
        </div>

            <section class="stats">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card mb-3">
                            <div class="card-body">
                                <h3 class="card-title">Statut des rapports</h3>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">Signés</div>
                                    <div class="progress-bar bg-warning text-dark" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">En attente de signature</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    </section>
            <section class="tournées">
                <h2>Suivi des tournées</h2>
                <div class="tournées-liste">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Date</th>
                            <th>Inspecteur</th>
                            <th>Etat de l'inspection</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>03/12/2023</td>
                            <td>Jean Dupont</td>
                            <td>En cours</td>
                        </tr>
                        <tr>
                            <td>02/28/2023</td>
                            <td>Marie Martin</td>
                            <td>Terminé</td>
                        </tr>
                        <tr>
                            <td>02/27/2023</td>
                            <td>Paul Durand</td>
                            <td>En cours</td>
                        </tr>
                        <tr>
                            <td>02/25/2023</td>
                            <td>Lucie Dubois</td>
                            <td>Terminé</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <section class="tri-tournées text-center">
                    <h3>Tri des tournées</h3>
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tri-date">Tri par date :</label>
                                <select class="form-control" id="tri-date">
                                    <option value="plus-recentes">Plus récentes</option>
                                    <option value="plus-anciennes">Plus anciennes</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tri-inspecteur">Tri par inspecteur :</label>
                                <select class="form-control" id="tri-inspecteur">
                                    <option value="alphabetique">Ordre alphabétique</option>
                                    <option value="reverse-alphabetique">Ordre alphabétique inverse</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </section>
            </section>
            <section class="rapports">
                <div class="container">
                    <h2 class="mb-4">Liste des rapports</h2>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">Numéro</th>
                                <th scope="col">Date</th>
                                <th scope="col">Inspecteur</th>
                                <th scope="col">Statut</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>#12345</td>
                                <td>03/12/2023</td>
                                <td>Jean Dupont</td>
                                <td>Signé</td>
                            </tr>
                            <tr>
                                <td>#12344</td>
                                <td>02/28/2023</td>
                                <td>Marie Martin</td>
                                <td>En attente de signature</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
</main>
</body>
</html>
