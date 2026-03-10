<?php
// Ici on utilise les sessions, vu dans le slide 122 (Variables SuperGlobales _SESSION)
session_start();

// Récupération des IDs sélectionnés via POST, vu dans le slide 85 (Variables SuperGlobales $_POST)
$selected = isset($_POST['selected']) ? $_POST['selected'] : array();

// Conversion du tableau en une chaîne séparée par des virgules, vu dans le slide 129 (Fonctions Natives)
$ids_str = implode(',', $selected);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Supprimer Personne</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form method="post" action="deletePerson.php">

        <div class="form_label">
            <label>ID:</label>
            <input type="text" name="id" value="<?php echo $ids_str; ?>" required>
        </div>

        <div class="form_btns">
            <button class="btn-blue" type="submit">Supprimer</button>
            <button class="btn-blue" type="button" onclick="location.href='index.php'">Annuler</button>
        </div>

    </form>
</body>

</html>
