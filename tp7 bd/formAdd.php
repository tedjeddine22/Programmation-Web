<?php
// formAdd.php
// Formulaire d'ajout d'une personne (voir slide 32 + slide 44)
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter Person</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Formulaire: Ajouter</h2>

<form action="addPerson.php" method="POST">
    <!-- ID obligatoire (table id non AUTO_INCREMENT, voir slide 15) -->
    <div class="form_label">
        <label for="form_id">ID :</label>
        <input type="number" name="valId" id="form_id" required>
    </div>

    <!-- Nom (voir slide 32) -->
    <div class="form_label">
        <label for="form_nom">Nom :</label>
        <input type="text" name="valNom" id="form_nom" required>
    </div>

    <!-- Prenom (voir slide 32) -->
    <div class="form_label">
        <label for="form_prenom">Prenom :</label>
        <input type="text" name="valPrenom" id="form_prenom" required>
    </div>

    <!-- Points (voir slide 32) -->
    <div class="form_label">
        <label for="form_points">Points :</label>
        <input type="number" step="0.01" name="valPoints" id="form_points" required>
    </div>

    <button class="btn-blue" type="submit">Ajouter</button>
</form>

</body>
</html>
