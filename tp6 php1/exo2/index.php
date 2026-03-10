<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitoring de serveurs</title>

</head>
<body style="font-family: Arial, sans-serif; padding: 20px;">
    <h1>Monitoring de serveurs</h1>

<?php
// Slide 64: Tableaux Associatifs - Les Types Complexes
$serveurs = [
    "api-01" => ["cpu" => 45, "ram" => 60, "status" => "online"],
    "api-02" => ["cpu" => 92, "ram" => 78, "status" => "online"],
    "db-prod" => ["cpu" => 70, "ram" => 95, "status" => "online"],
    "web-01" => ["cpu" => 30, "ram" => 40, "status" => "online"],
    "web-02" => ["cpu" => 55, "ram" => 65, "status" => "offline"],
    "cache-01" => ["cpu" => 88, "ram" => 92, "status" => "online"]
];

// Slide 61: Echo - Affichage
// Slide 25: PHP imprime du texte dans notre document HTML
echo "<table id='table1' style='border-collapse: collapse; margin: 20px 0; border: 1px solid #000;'>\n";
echo "    <tr>\n";
echo "        <th style='padding: 8px 12px; text-align: left; border: 1px solid #000; background-color: #f0f0f0; font-weight: bold;'>Serveur</th>\n";
echo "        <th style='padding: 8px 12px; text-align: left; border: 1px solid #000; background-color: #f0f0f0; font-weight: bold;'>CPU%</th>\n";
echo "        <th style='padding: 8px 12px; text-align: left; border: 1px solid #000; background-color: #f0f0f0; font-weight: bold;'>RAM%</th>\n";
echo "        <th style='padding: 8px 12px; text-align: left; border: 1px solid #000; background-color: #f0f0f0; font-weight: bold;'>Status</th>\n";
echo "        <th style='padding: 8px 12px; text-align: left; border: 1px solid #000; background-color: #f0f0f0; font-weight: bold;'>Score</th>\n";
echo "        <th style='padding: 8px 12px; text-align: left; border: 1px solid #000; background-color: #f0f0f0; font-weight: bold;'>Etat</th>\n";
echo "    </tr>\n";

// Slide 60: Variables et Constantes
$total_online_servers = 0;
$moy_scores = 0;
$best_serv = "";
$best_score = -1;

// Slide 69: Les Boucles - foreach pour parcourir les tableaux associatifs
foreach ($serveurs as $nom => $info) {
    $cpu = $info["cpu"];
    $ram = $info["ram"];
    $status = $info["status"];
    
    // Slide 66: Les Opérateurs Arithmétiques
    $score = 100 - ($cpu + $ram) / 2;
    // Slide 65: Fonctions Essentielles - round()
    $score = round($score, 1);
    
    // Slide 67: Les Conditions - if/else
    // Slide 66: Les Opérateurs Rationnels (==)
    if ($status == "offline") {
        $etat = "ATTENTION";
        $bg_color = "rgb(200, 200, 200)";
    } else {
        $total_online_servers++;
        $moy_scores += $score;
        
        // Slide 66: Les Opérateurs Logiques (||) et Rationnels (>=)
        if ($cpu >= 85 || $ram >= 90) {
            $etat = "CRITIQUE";
            $bg_color = "rgb(255, 220, 150)";
        } elseif ($score >= 50) {
            $etat = "OK";
            $bg_color = "rgb(180, 255, 180)";
        } else {
            $etat = "CRITIQUE";
            $bg_color = "rgb(255, 220, 150)";
        }
    }
    
    // Slide 66: Les Opérateurs Logiques (&&) et Rationnels (>, ==)
    if ($status == "online" && $score > $best_score) {
        $best_score = $score;
        $best_serv = $nom;
    }
    
    // Slide 61: Echo - Affichage avec concaténation de variables
    echo "    <tr style='background-color: $bg_color;'>\n";
    echo "        <td style='padding: 8px 12px; text-align: left; border: 1px solid #000;'>$nom</td>\n";
    echo "        <td style='padding: 8px 12px; text-align: left; border: 1px solid #000;'>$cpu</td>\n";
    echo "        <td style='padding: 8px 12px; text-align: left; border: 1px solid #000;'>$ram</td>\n";
    echo "        <td style='padding: 8px 12px; text-align: left; border: 1px solid #000;'>$status</td>\n";
    echo "        <td style='padding: 8px 12px; text-align: left; border: 1px solid #000;'>$score</td>\n";
    echo "        <td style='padding: 8px 12px; text-align: left; border: 1px solid #000;'>$etat</td>\n";
    echo "    </tr>\n";
}

echo "</table>\n";

// Slide 67: Les Conditions - if pour vérifier avant division
// Slide 66: Les Opérateurs Rationnels (>)
if ($total_online_servers > 0) {
    // Slide 65: Fonctions Essentielles - round()
    $moy_scores = round($moy_scores / $total_online_servers, 1);
}

// Slide 61: Echo - Affichage
echo "<h2 style='margin-top: 30px;'>Résumé</h2>\n";
echo "<p>Serveurs online: $total_online_servers</p>\n";
echo "<p>Score moyen: $moy_scores</p>\n";
echo "<p>Meilleur serveur: $best_serv ($best_score)</p>\n";
?>

</body>
</html>