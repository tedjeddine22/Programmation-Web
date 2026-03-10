<?php
session_start();

// Ici on récupère les données de la session, vu dans le slide 122 (Variables SuperGlobales _SESSION)
$persons = $_SESSION['persons'] ?? array() ;

$lignes = count($persons);
$points = 0;

foreach ($persons as $person) { // Ici on utilise une boucle foreach, vu dans le slide 69 (Les Boucles)
    $points += $person['points'];
}

// Conversion du tableau en JSON (format lisible), vu dans le slide 131-132 (JSON)
$json = json_encode(
    [
        "data"   => $persons,
        "lignes" => $lignes,
        "points" => $points
    ],
    JSON_PRETTY_PRINT
);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>JSON Data</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <pre>
        <?php echo $json; // Affichage du JSON formaté, vu dans le slide 131-132 (JSON) ?>
    </pre>

    <div class="form_btns">
        <button class="btn-blue" type="button" onclick="location.href='index.php'">Retour</button>
    </div>

</body>

</html>