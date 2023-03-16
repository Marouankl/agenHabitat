<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord administrateur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
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

    /* Style pour le diagramme en camembert */
    #camembert {
        width: 50%;
        margin: 50px auto;
        text-align: center;
    }
    #camembert h2 {
        font-size: 24px;
    }
    #camembert canvas {
        width: 300px;
        height: 300px;
    }
</style>

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

                @foreach ($inspection as $inspections)

                    <tr>
                        <td>{{$inspections->NumInspection }}</td>
                        <td>{{$inspections->utilisateur->Nom}}</td>
                        <td>{{$inspections->InfoCalendrier}}</td>
                        <td><span class="badge bg-success"></span></td>
                        <td>
                            <a href="{{ route('administratif.show', $inspections->NumInspection) }}" class="btn btn-primary">Détails</a>
                            <a href="{{ route('administratif.edit', $inspections->NumInspection) }}" class="btn btn-warning">Modifier</a>
                            <a href="{{ route('administratif.delete', $inspections->NumInspection) }}" class="btn btn-danger">Supprimer</a>
                        </td>
                    </tr>
                @endforeach
                <!-- Ajouter plus de rapports ici -->
                </tbody>
            </table>
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
        <section>
            <!-- Liste des tournées en cours -->
            <table id="tournées">
                <caption>Liste des tournées en cours</caption>
                <thead>
                <tr>
                    <th>Nom de la tournée</th>
                    <th>Date de début</th>
                    <th>Date de fin</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($inspection as $inspections)
                <tr>

                    <td>{{$inspections->tournee->NomClient }} </td>
                    <td>{{$inspections->InfoCalendrier }}</td>
                    <td>{{$inspections->tournee->DateRDV }}</td>
                </tr>
                @endforeach
                </tbody>
            </table>

            <!-- Diagramme en camembert des états des inspections -->
            <div id="camembert">
                <h2>États des inspections</h2>
                <canvas id="chart"></canvas>
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
                            @foreach ($inspection as $inspections)
                            <tr>
                                <td>#{{$inspections->NumInspection }}</td>
                                <td>{{$inspections->InfoCalendrier }}</td>
                                <td>{{$inspections->utilisateur->Nom }}</td>
                                <td>Signature </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
</main>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctx = document.getElementById('chart').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['En cours', 'Terminées', 'En attente'],
            datasets: [{
                backgroundColor: ['#4CAF50', '#FFC107', '#E91E63'],
                data: [20, 70, 10]
            }]
        },
        options: {
            legend: {
                position: 'bottom'
            }
        }
    });
</script>
</body>

</html>
