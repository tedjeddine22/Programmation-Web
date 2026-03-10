<?php
// Ici on utilise les sessions, vu dans le slide 122 (Variables SuperGlobales _SESSION)
session_start();

// Récupération des IDs, vu dans le slide 85 (Variables SuperGlobales $_POST)
if (isset($_POST['id'])) {

    $ids_str = $_POST['id'];
    $ids = explode(',', $ids_str); // Conversion string → tableau, vu dans le slide 129 (Fonctions Natives)

    rsort($ids); // Tri descendant, vu dans le slide 129 (Fonctions Natives)

    foreach ($ids as $id) { // Ici on utilise une boucle foreach, vu dans le slide 69 (Les Boucles)
        $id = trim($id);

        if (isset($_SESSION['persons'][$id])) {
            unset($_SESSION['persons'][$id]); // Suppression dans tableau associatif, vu dans le slide 64
        }
    }

    // Réindexation du tableau après suppression, vu dans le slide 129 (Fonctions Natives)
    $_SESSION['persons'] = array_values($_SESSION['persons']);
}

// Redirection vers index.php, vu dans le slide 90 (Fonctions Natives)
header('Location: index.php');
exit;
?>
