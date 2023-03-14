<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Dashboard de suivi des tournées</title>
    <style>
        /* Style pour le corps de la page */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Style pour l'en-tête */
        header {
            background-color: #4CAF50;
            color: white;
            padding: 20px;
            text-align: center;
        }
        h1 {
            margin: 0;
        }

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

        /* Style pour le pied de page */
        footer {
            background-color: #f2f2f2;
            color: #333;
            padding: 20px;
            text-align: center;
            font-size: 14px;
        }
    </style>
</head>
<body>
<header>
    <h1>Dashboard de suivi des tournées</h1>
</header>

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
        <tr>
            <td>Tournée 1</td>
            <td>01/03/2023</td>
            <td>07/03/2023</td>
        </tr>
        <tr>
            <td>Tournée 2</td>
            <td>05/03/2023</td>
            <td>11/03/2023</td>
        </tr>
        <tr>
            <td>Tournée 3</td>
            <td>10/03/2023</td>
            <td>16/03/2023</td>
        </tr>
        </tbody>
    </table>

    <!-- Diagramme en camembert des états des inspections -->
    <div id="camembert">
        <h2>États des inspections</h2>
        <canvas id="chart"></canvas>
    </div>
</section>
<!-- Script pour le diagramme en camembert -->
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
