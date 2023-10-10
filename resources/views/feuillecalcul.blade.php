<!DOCTYPE html>
<html>
<head>
    <title>Calcul de dimensionnement solaire photovoltaïque</title>
</head>
<body>
    <h1>Calcul de dimensionnement solaire photovoltaïque</h1>
    <form method="post" action="">
        <label for="besoins">Vos besoins électriques journaliers en kWh :</label>
        <input type="number" name="besoins" step="0.01" required><br><br>

        <label for="localisation">Localisation géographique (latitude) :</label>
        <input type="number" name="localisation" step="0.01" required><br><br>

        <label for="localisation">Localisation géographique (Longitude) :</label>
        <input type="number" name="localisation" step="0.01" required><br><br>

        <label for="inclinaison">Inclinaison des panneaux (degrés) :</label>
        <input type="number" name="inclinaison" step="0.01" required><br><br>

        <label for="orientation">Orientation des panneaux (degrés) :</label>
        <input type="number" name="orientation" step="0.01" required><br><br>

        <label for="autonomie">Autonomie souhaitée (en heures) :</label>
        <input type="number" name="autonomie" step="0.01" required><br><br>

        <label for="stockage">Capacité de stockage de la batterie (en kWh) :</label>
        <input type="number" name="stockage" step="0.01" required><br><br>

        <!-- Ajoutez ici d'autres paramètres, tels que le régulateur de charge, le choix de l'onduleur, les câblages, etc. -->

        <input type="submit" name="calculer" value="Calculer">
    </form>

    <?php
    // Vérifier si le formulaire a été soumis
    if (isset($_POST['calculer'])) {
        // Récupérer les données du formulaire
        $besoins_journaliers = floatval($_POST['besoins']);
        $latitude = floatval($_POST['localisation']);
        $inclinaison = floatval($_POST['inclinaison']);
        $orientation = floatval($_POST['orientation']);
        $autonomie = floatval($_POST['autonomie']);
        $capacite_stockage = floatval($_POST['stockage']);

        

        echo "<p>La capacité nécessaire du système solaire photovoltaïque est de (calculer ici) Wc.</p>";
    }
    ?>

</body>
</html>




