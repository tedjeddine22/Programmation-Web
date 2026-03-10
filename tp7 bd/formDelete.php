<?php
// formDelete.php
// Formulaire de suppression (voir slide 40)
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Supprimer Person</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Formulaire: Supprimer</h2>

<form action="deletePerson.php" method="POST">
    <!-- ID à supprimer (voir slide 40) -->
    <div class="form_label">
        <label for="form_id">ID :</label>
        <input type="number" name="valId" id="form_id" required>
    </div>

    <button class="btn-blue" type="submit">Supprimer</button>
</form>

</body>
</html>
