<?php
// deletePerson.php
// Script DELETE dans la table person (voir slide 41)

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Récupération ID (voir slide 40)
    if (isset($_POST["valId"])) {

        $id = (int) $_POST["valId"];

        // Paramètres MySQL (voir slide 2)
        $host = "localhost";
        $port = 3306;
        $user = "root";
        $password = "";
        $dbname = "db_persons";

        try {
            // Connexion PDO (voir slide 41)
            $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";
            $pdo = new PDO($dsn, $user, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // DELETE (voir slide 41)
            $sql = "DELETE FROM person WHERE id=:id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([":id" => $id]);

        } catch (PDOException $e) {
            die("Erreur lors de la suppression : " . $e->getMessage());
        }
    }
}

// Redirection (voir slide 41)
header("Location: index.php");
exit;
?>
