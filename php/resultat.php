<?php 
include 'php/config.php';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbName", $dbUser, $dbPassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Afficher les résultats des matchs
    echo "<h1>Résultats des Matchs</h1>";
    $stmtResultats = $conn->prepare("SELECT * FROM Resultat");
    $stmtResultats->execute();
    $resultats = $stmtResultats->fetchAll(PDO::FETCH_ASSOC);

    foreach ($resultats as $resultat) {
        echo "Match entre l'équipe ID " . htmlspecialchars($resultat['id_equipe1']) . " et l'équipe ID " . htmlspecialchars($resultat['id_equipe2']) . " - Score: " . htmlspecialchars($resultat['score']) . "<br>";
        // Ajoutez d'autres détails si nécessaire
    }

} catch(PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>
