<?php
// index.php
// Page principale de la mini-application CRUD (voir slide 44)
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mini-App CRUD Persons</title>
    <link rel="stylesheet" href="style.css"> <!-- CSS (voir slide 44) -->
</head>
<body>

<div id="container_btn">
    <!-- Navigation CRUD (voir slide 44) -->
    <a class="btn-add" href="formAdd.php">Ajouter</a>
    <a class="btn-upd" href="formUpdate.php">Modifier</a>
    <a class="btn-del" href="formDelete.php">Supprimer</a>
    <a class="btn-consol" href="dataJson.php">dataJson</a>
</div>

<hr>

<!-- Affichage du contenu de la table person (voir slide 30 + slide 44) -->
<?php
// Connexion + SELECT + affichage (voir slide 30)
$host = "localhost";
$port = 3306;
$user = "root";
$password = "";
$dbname = "db_persons";

try {
    // Connexion PDO (voir slide 32-33)
    $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // SELECT (voir slide 30)
    $sql = "SELECT * FROM person";
    $stmt = $pdo->query($sql);
    $persons = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    die("Erreur connexion/lecture : " . $e->getMessage());
}
?>

<div id="table_container">
    <h2>Liste des persons</h2>

    <table>
        <thead>
        <tr>
            <th class="col_number">ID</th>
            <th class="col_text">NOM</th>
            <th class="col_text">PRENOM</th>
            <th class="col_number">POINTS</th>
        </tr>
        </thead>

        <tbody>
        <?php foreach ($persons as $p): ?>
            <tr>
                <td class="col_number"><?= htmlspecialchars($p["id"]) ?></td>
                <td class="col_text"><?= htmlspecialchars($p["nom"]) ?></td>
                <td class="col_text"><?= htmlspecialchars($p["prenom"]) ?></td>
                <td class="col_number"><?= htmlspecialchars($p["points"]) ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

</body>
</html>
