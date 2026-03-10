<?php
// updatePerson.php
// Script UPDATE dans la table person (voir slide 37)

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Récupération des champs (voir slide 36)
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
            // Connexion PDO (voir slide 37)
            $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";
            $pdo = new PDO($dsn, $user, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // UPDATE (voir slide 37)
            $sql = "UPDATE person SET nom=:nom, prenom=:prenom, points=:points WHERE id=:id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ":nom" => $nom,
                ":prenom" => $prenom,
                ":points" => $points,
                ":id" => $id
            ]);

        } catch (PDOException $e) {
            die("Erreur lors de la mise à jour : " . $e->getMessage());
        }
    }
}

// Redirection (voir slide 37)
header("Location: index.php");
exit;
?>
