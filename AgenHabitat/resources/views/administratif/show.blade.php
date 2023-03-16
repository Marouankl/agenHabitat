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
        section{
           padding: 50px;
        }

        h1{
            color: #0062cc;
            text-align: center;

        }
        h3{
            color: #0062cc;
            text-align: center;

        }
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
<section >
    <h1>Rapport par chaque Inspection</h1>
    <!-- Liste des tournées en cours -->
    <table id="tournées">
        <h3>Les informations sur Clients </h3>
                <thead>
                <tr>
                    <th>Nom de client</th>
                    <th> Date de rendez-vous</th>
                    <th>Adresse de client</th>
                    <th>téléphone</th>
                    <th>E-mail</th>
                    <th>Numero Locatire</th>
                    <th>Remarque</th>


                </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>{{$inspections->tournee->NomClient }}</td>
                        <td>{{$inspections->tournee->DateRDV }}</td>
                        <td>{{$inspections->tournee->AdresseClient }}</td>
                        <td>{{$inspections->tournee->Telephone }}</td>
                        <td>{{$inspections->tournee->Mail }}</td>
                        <td>{{$inspections->tournee->NumLocataire }}</td>
                        <td>{{$inspections->tournee->Remarque }}</td>



                    </tr>

                </tbody>
    </table>
</section>
  <section>
      <h3>Les informations sur l'inspection </h3>
      <table id="tournées">
          <thead>
          <tr>
              <th>Nom d'inspecteur</th>
              <th>Numero d'inspection</th>
              <th>Date de l'inspection</th>
              <th>Type de Batiment</th>
              <th>Surface de habitatable</th>
              <th>Releve de consomation chauffage</th>
              <th>Releve de consomation d'eau</th>
              <th>Releve de consomation refroidissement</th>
              <th>Releve GES </th>
              <th>Statu</th>
          </tr>
          </thead>
          <tbody>

              <tr>
                  <td>{{$inspections->utilisateur->Nom}}</td>
                  <td>{{$inspections->NumInspection }}</td>
                  <td>{{$inspections->TypeBatiment}}</td>
                  <td>{{$inspections->AnneeConstruction}}</td>
                  <td>{{$inspections->SurfaceHabitable}}</td>
                  <td>{{$inspections->ReleveConsoChauffage}}</td>
                  <td>{{$inspections->ReleveConsoEau}}</td>
                  <td>{{$inspections->ReleveConsoRefroidissement}}</td>
                  <td>{{$inspections->ReleveGES}}</td>
                  <td></td>

              </tr>

          </tbody>
      </table>
  </section>



</body>
</html>
