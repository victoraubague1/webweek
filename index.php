<?php 
include 'php/config.php';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbName", $dbUser, $dbPassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Récupération de toutes les équipes
    $stmtEquipes = $conn->prepare("SELECT * FROM Equipe");
    $stmtEquipes->execute();
    $equipes = $stmtEquipes->fetchAll(PDO::FETCH_ASSOC);

    foreach ($equipes as $equipe) {
        // Affichage du nom de l'équipe
        echo "Nom de l'équipe: " . htmlspecialchars($equipe['nom_equipe']) . "<br>";

        // Récupération et affichage des joueurs de l'équipe
        $stmtJoueurs = $conn->prepare("SELECT * FROM Participant WHERE id_equipe = :idEquipe");
        $stmtJoueurs->bindParam(':idEquipe', $equipe['id_equipe']);
        $stmtJoueurs->execute();
        $joueurs = $stmtJoueurs->fetchAll(PDO::FETCH_ASSOC);

        if ($joueurs) {
            foreach ($joueurs as $joueur) {
                echo "Nom du joueur: " . htmlspecialchars($joueur['nom']) . " " . htmlspecialchars($joueur['prenom']) . "<br>";
                // Affichage de l'image du joueur si elle existe
                if (!empty($joueur['photo_participant'])) {
                    echo "<img src='" . htmlspecialchars($joueur['photo_participant']) . "' alt='Image du joueur'><br>";
                }
            }
        } else {
            echo "Pas de joueurs dans cette équipe.<br>";
        }
        echo "<br>"; // Espace entre les équipes
    }

    // Récupération de tous les partenaires
    $stmtPartenaires = $conn->prepare("SELECT * FROM Partenaire");
    $stmtPartenaires->execute();
    $partenaires = $stmtPartenaires->fetchAll(PDO::FETCH_ASSOC);

    foreach ($partenaires as $partenaire) {
        // Affichage des informations du partenaire
        echo "Nom du partenaire: " . htmlspecialchars($partenaire['nom_partenaire']) . "<br>";
        // Affichage du logo du partenaire si il existe
        if (!empty($partenaire['logo'])) {
            echo "<img src='" . htmlspecialchars($partenaire['logo']) . "' alt='Logo du partenaire' style='width:100px;'><br>";
        }
        echo "<br>"; // Espace entre les partenaires
    }

} catch(PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>
