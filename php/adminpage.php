<?php 
include 'php/config.php';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbName", $dbUser, $dbPassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Afficher les matchs en cours
    echo "<h1>Matchs en Cours</h1>";
    // Remplacer cette requête par la requête appropriée pour vos matchs en cours
    $stmtMatches = $conn->prepare("SELECT * FROM Resultat WHERE condition_pour_match_en_cours");
    $stmtMatches->execute();
    $matches = $stmtMatches->fetchAll(PDO::FETCH_ASSOC);

    foreach ($matches as $match) {

        echo "Match: " . htmlspecialchars($match['id_equipe1']) . " vs " . htmlspecialchars($match['id_equipe2']) . "<br>";
       
    }

    // Afficher les partenaires
    echo "<h1>Partenaires</h1>";
    $stmtPartenaires = $conn->prepare("SELECT * FROM Partenaire");
    $stmtPartenaires->execute();
    $partenaires = $stmtPartenaires->fetchAll(PDO::FETCH_ASSOC);

    foreach ($partenaires as $partenaire) {
        echo "Nom du partenaire: " . htmlspecialchars($partenaire['nom_partenaire']) . "<br>";
        if (!empty($partenaire['logo'])) {
            echo "<img src='" . htmlspecialchars($partenaire['logo']) . "' alt='Logo du partenaire' style='width:100px;'><br>";
        }
    }

} catch(PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>
