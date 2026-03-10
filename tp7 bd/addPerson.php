<?php
// addPerson.php
// Script d'insertion dans la table person (voir slide 33)

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Récupération des champs (voir slide 32)
    if (isset($_POST["valId"], $_POST["valNom"], $_POST["valPrenom"], $_POST["valPoints"])) {

        $id     = (int) $_POST["valId"];
        $nom    = $_POST["valNom"];
        $prenom = $_POST["valPrenom"];
        $points = (float) $_POST["valPoints"]; // FLOAT (voir slide 15)

        // Paramètres MySQL (voir slide 2)
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

            // INSERT (voir slide 33)
            $sql = "INSERT INTO person (id, nom, prenom, points) VALUES (:id, :nom, :prenom, :points)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ":id" => $id,
                ":nom" => $nom,
                ":prenom" => $prenom,
                ":points" => $points
            ]);

        } catch (PDOException $e) {
            die("Erreur lors de l'ajout : " . $e->getMessage());
        }
    }
}

// Redirection (voir slide 33)
header("Location: index.php");
exit;
?>
