<?php
// Ici on utilise les sessions, vu dans le slide 122 (Variables SuperGlobales _SESSION)
session_start();

// Récupération des données du formulaire, vu dans le slide 85 (Variables SuperGlobales $_POST)
if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['points'])) {
    $new_person = array(
        'nom' => $_POST['nom'],
        'prenom' => $_POST['prenom'],
        'points' => (int)$_POST['points'] // Conversion en int, vu dans le slide 66 (Opérateurs)
    );
    $_SESSION['persons'][] = $new_person; // Ajout au tableau, vu dans le slide 64 (Les Tableaux Associatifs)
}

// Redirection, vu dans le slide 90 (Fonctions Natives)
header('Location: index.php');
exit;
?>