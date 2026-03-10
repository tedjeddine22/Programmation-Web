<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Étudiants-Note</title>
</head>
<body>
    <h1>Étudiants-Note</h1>

    <?php
    
    // Slide 63 – Déclaration d'un tableau associatif
    $etudiantsNote = [
        "JOHN"   => 9,
        "BOB"    => 15.5,
        "RAYANE" => 7,
        "ROSIE"  => 13
    ];

    // Slide 71 – Définition d'une fonction
    function estAdmissible($note) {
        return $note >= 10;
    }

    // Slide 27 – Génération de HTML avec PHP
    echo '<table id="table1" border="1">';
    echo '<thead>';
    echo '<tr><th>Étudiant</th><th>Note</th></tr>';
    echo '</thead>';
    echo '<tbody>';

    // Slide 69 – Boucle foreach
    // Parcours du tableau "etudiantsNote"
   
    foreach ($etudiantsNote as $etudiant => $note) {
        
        // Slide 71 – Appel de fonction
        // Appel de "estAdmissible(note)"
       
        $admissible = estAdmissible($note);
        
        // Slide 67 – Condition 
        // Choix de la couleur selon le retour de la fonction
        
        if ($admissible) {
            // Vert si admissible (note ≥ 10)
            $couleurFond = "rgb(136,248,136)";
        } else {
            // Rouge si non admissible (note < 10)
            $couleurFond = "rgb(251,173,173)";
        }

        // Slide 27 – Génération dynamique de HTML
        // Ligne <tr> avec classe="row" et style inline
       
        echo '<tr class="row" style="background-color: ' . $couleurFond . ';">';
        echo '<td class="etud">' . $etudiant . '</td>';
        echo '<td class="note">' . $note . '</td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
    ?>
</body>
</html>