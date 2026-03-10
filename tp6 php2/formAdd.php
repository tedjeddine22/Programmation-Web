<?php
// Ici on utilise les sessions, vu dans le slide 122 (Variables SuperGlobales _SESSION)
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Ajouter Personne</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form method="post" action="addPerson.php">

        <div class="form_label">
            <label>Nom: </label>
            <input type="text" name="nom" required>
        </div>

        <div class="form_label">
            <label>Prénom: </label>
            <input type="text" name="prenom" required>
        </div>

        <div class="form_label">
            <label>Points: </label>
            <input type="number" name="points" required>
        </div>

        <div class="form_btns">
            <button class="btn-blue" type="submit">Ajouter</button>
            <button class="btn-blue" type="button" onclick="location.href='index.php'">Annuler</button>
        </div>

    </form>
</body>

</html>
