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
                                <a class="nav-link" href="{{ route('administratif.index')}}">Accueil </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('administratif.statique.stat')}}">Statistiques</a>
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>

<main>
    @php
        $inspection = App\Models\Inspection::orderBy('InfoCalendrier', 'desc')->get();
        $newInspectionsCount = $inspection->count();
        $previousInspectionsCount = session('previousInspectionsCount', 0);

        if ($newInspectionsCount > $previousInspectionsCount) {
            session()->flash('notification', 'Nouveaux rapports disponibles !');
            session(['previousInspectionsCount' => $newInspectionsCount]);
        }

        $sortOrder = request()->input('sort') == 'asc' ? 'asc' : 'desc';
        $inspection = App\Models\Inspection::orderBy('InfoCalendrier', $sortOrder)->get();
    @endphp

    <section class="reports">
        <h2 style="text-align: center">Rapports</h2>
        <div class="row justify-content-end mb-3">
            <div class="col-auto">
                <label for="sortOrder" class="form-label">Trier par date:</label>
                <select class="form-select" id="sortOrder" name="sortOrder">
                    <option value="desc" @if ($sortOrder == 'desc') selected @endif>Date décroissante</option>
                    <option value="asc" @if ($sortOrder == 'asc') selected @endif>Date croissante</option>
                </select>
            </div>
        </div>
        @if (session('notification'))
            <div class="alert alert-info" role="alert">
                {{ session('notification') }}
            </div>
        @endif
        <div class="table-responsive">
            <table class="table text-center table-bordered">
                <thead>
                <tr>
                    <th>Titre</th>
                    <th>Auteur</th>
                    <th>Date </th>
                    <th>Signature d'inspecteur</th>
                    <th>Statu</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>

                @foreach ($inspection as $inspections)

                    <tr>
                        <td>{{$inspections->NumInspection }}</td>
                        <td>{{$inspections->utilisateur->Nom}}</td>
                        <td>{{$inspections->InfoCalendrier}}</td>
                        <td><span class="badge bg-success">Signature</span></td>
                        <td><span class="badge bg-success">Terminer</span></td>
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
                        <h3 class="card-title">Nombre de rapports</h3>
                        <p class="card-text">{{ $inspection->count() }}</p>
                    </div>
                </div>
            </div>
        </div>
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-body">
                        <h3 class="card-title">Inspecteur sur le terrain</h3>
                        <p class="card-text">{{ $tournee->count() }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <h3 class="card-title">Tournées en cours</h3>
                        <p class="card-text">2</p>
                    </div>
                </div>
            </div>
        </div>


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
<script>
    $('#sortOrder').change(function() {
        var sortOrder = $(this).val();
        window.location.href = '?sort=' + sortOrder;
    });
</script>
</body>

</html>
