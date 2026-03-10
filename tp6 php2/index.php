<?php
// Ici on utilise les sessions, vu dans le slide 122 (Variables SuperGlobales _SESSION)
session_start();

// Ici on initialise le tableau 'persons' s'il n'existe pas encore, vu dans le slide 64 (Les Tableaux Associatifs)
if (!isset($_SESSION['persons'])) {
    $_SESSION['persons'] = array(
        array('nom' => 'nom1', 'prenom' => 'prenom1', 'points' => 5),
        array('nom' => 'nom2', 'prenom' => 'prenom2', 'points' => 10),
        array('nom' => 'nom3', 'prenom' => 'prenom3', 'points' => 15)
    );
}

$persons = $_SESSION['persons'];

// Calcul du nombre de lignes et du total des points, vu dans le slide 129 (Fonctions Natives)
$lignes = count($persons);
$total_points = 0;

foreach ($persons as $person) { // Ici on utilise une boucle foreach, vu dans le slide 69 (Les Boucles)
    $total_points += $person['points'];
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="table_container">

        <!-- Formulaire de suppression -->
        <form method="post" action="formDelete.php">

            <table id="persons_table">
                <thead>
                    <tr>
                        <th class="col_number">N°</th>
                        <th class="col_text">Nom</th>
                        <th class="col_text">Prénom</th>
                        <th class="col_number">Points</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    // Boucle pour afficher chaque ligne du tableau, vu dans le slide 69 (Les Boucles)
                    foreach ($persons as $key => $person) {
                        $num = $key + 1; // Calcul du numéro dynamique, vu dans le slide 66 (Opérateurs)

                        echo "<tr class='row'>"; // Ici on utilise echo pour générer du HTML dynamiquement, vu dans le slide 61 (echo)
                        echo "<td class='col_number'>$num</td>";
                        echo "<td class='col_text'>{$person['nom']}</td>";
                        echo "<td class='col_text'>{$person['prenom']}</td>";
                        echo "<td class='col_number'>{$person['points']}</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>

            <div id="container_summary">
                <p id="p1"><?php echo $lignes; ?> ligne(s)</p>
                <p id="p2"></p>
                <p id="p3">Total point(s) : <?php echo $total_points; ?></p>
            </div>

            <div id="container_btn">
                <button class="btn-consol" type="button" onclick="location.href='dataJson.php'">Console Tableau</button>
                <button class="btn-del" type="submit" onclick="location.href='formDelete.php'">Supprimer</button>
                <button class="btn-add" type="button" onclick="location.href='formAdd.php'">Ajouter</button>
            </div>

        </form>
    </div>
</body>

</html>
