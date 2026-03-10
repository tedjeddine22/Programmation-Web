<?php
// dataJson.php
// Export JSON de la table person (voir slide 44)

// Paramètres MySQL (voir slide 2)
$host = "localhost";
$port = 3306;
$user = "root";
$password = "";
$dbname = "db_persons";

try {
    // Connexion PDO (voir slide 44)
    $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // SELECT (voir slide 30)
    $sql = "SELECT * FROM person";
    $stmt = $pdo->query($sql);
    $persons = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // JSON output (voir slide 44)
    header("Content-Type: application/json; charset=utf-8");
    echo json_encode($persons, JSON_PRETTY_PRINT);

} catch (PDOException $e) {
    header("Content-Type: application/json; charset=utf-8");
    echo json_encode(["error" => $e->getMessage()]);
}
?>
