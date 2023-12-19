<?php
include 'config.php';
session_start(); 


if (!isset($_SESSION['user'])) {
    header("Location: ../adminconnexion.php"); 
    exit;
}
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbName", $dbUser, $dbPassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Récupérer les équipes et les activités pour le formulaire
    $stmtEquipes = $conn->prepare("SELECT id_equipe, nom_equipe FROM Equipe");
    $stmtEquipes->execute();
    $equipes = $stmtEquipes->fetchAll(PDO::FETCH_ASSOC);

    $stmtActivites = $conn->prepare("SELECT id_activite, nom_activite FROM Activite");
    $stmtActivites->execute();
    $activites = $stmtActivites->fetchAll(PDO::FETCH_ASSOC);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $equipesSelectionnees = $_POST['equipes'] ?? [];
        $scoreEquipe1 = $_POST['scoreEquipe1'] ?? 0;
        $scoreEquipe2 = $_POST['scoreEquipe2'] ?? 0;
        $idEquipeGagnante = $_POST['idEquipeGagnante'] ?? '';
        $idActivite = $_POST['idActivite'];

        if (count($equipesSelectionnees) == 2) {
            $idEquipe1 = $equipesSelectionnees[0];
            $idEquipe2 = $equipesSelectionnees[1];

            // Insérer les informations dans la base de données
            $stmtInsert = $conn->prepare("INSERT INTO Resultat (id_equipe1, id_equipe2, score_equipe1, score_equipe2, id_equipe_gagnante, id_activite) VALUES (:idEquipe1, :idEquipe2, :scoreEquipe1, :scoreEquipe2, :idEquipeGagnante, :idActivite)");
            $stmtInsert->bindParam(':idEquipe1', $idEquipe1);
            $stmtInsert->bindParam(':idEquipe2', $idEquipe2);
            $stmtInsert->bindParam(':scoreEquipe1', $scoreEquipe1);
            $stmtInsert->bindParam(':scoreEquipe2', $scoreEquipe2);
            $stmtInsert->bindParam(':idEquipeGagnante', $idEquipeGagnante);
            $stmtInsert->bindParam(':idActivite', $idActivite);
            $stmtInsert->execute();

            // Mettre à jour les points pour l'équipe gagnante
            if (!empty($idEquipeGagnante)) {
                $stmtUpdatePoints = $conn->prepare("UPDATE Equipe SET points = points + 1 WHERE id_equipe = :idEquipeGagnante");
                $stmtUpdatePoints->bindParam(':idEquipeGagnante', $idEquipeGagnante);
                $stmtUpdatePoints->execute();
            }

            // Redirection pour éviter les soumissions multiples
            header("Location: " . htmlspecialchars($_SERVER["PHP_SELF"]));
            exit();
        }
    }

    // Récupérer les résultats des matchs pour l'affichage
    $stmtResultats = $conn->prepare("SELECT r.id_equipe1, r.id_equipe2, r.score_equipe1, r.score_equipe2, r.id_equipe_gagnante, r.id_activite, e1.nom_equipe as nom_equipe1, e2.nom_equipe as nom_equipe2, a.nom_activite FROM Resultat r LEFT JOIN Equipe e1 ON r.id_equipe1 = e1.id_equipe LEFT JOIN Equipe e2 ON r.id_equipe2 = e2.id_equipe LEFT JOIN Activite a ON r.id_activite = a.id_activite");
    $stmtResultats->execute();
    $resultats = $stmtResultats->fetchAll(PDO::FETCH_ASSOC);

} catch(PDOException $e) {
    echo "Erreur : " . $e->getMessage();
    exit;
}
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Administration - Entrée des Résultats de Match</title>
</head>
<body>
    <h1>Entrée des Résultats de Match</h1>
    <?php if (isset($message)) echo "<p>$message</p>"; ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <fieldset>
            <legend>Choisir deux équipes :</legend>
            <?php foreach ($equipes as $equipe) {
                echo "<input type='checkbox' name='equipes[]' value='" . $equipe['id_equipe'] . "'> " . htmlspecialchars($equipe['nom_equipe']) . "<br>";
            } ?>
        </fieldset>

        <label for="scoreEquipe1">Score Équipe 1:</label>
        <input type="number" id="scoreEquipe1" name="scoreEquipe1" required><br>

        <label for="scoreEquipe2">Score Équipe 2:</label>
        <input type="number" id="scoreEquipe2" name="scoreEquipe2" required><br>

        <label for="idEquipeGagnante">Équipe Gagnante:</label>
        <select id="idEquipeGagnante" name="idEquipeGagnante" required>
            <option value="">Sélectionner l'équipe gagnante</option>
            <?php foreach ($equipes as $equipe) {
                echo "<option value='" . $equipe['id_equipe'] . "'>" . htmlspecialchars($equipe['nom_equipe']) . "</option>";
            } ?>
        </select><br>

        <label for="idActivite">Activité:</label>
        <select id="idActivite" name="idActivite" required>
            <?php foreach ($activites as $activite) {
                echo "<option value='" . $activite['id_activite'] . "'>" . htmlspecialchars($activite['nom_activite']) . "</option>";
            } ?>
        </select><br>

        <input type="submit" value="Soumettre le Résultat">
    </form>
    <form action="../logout.php" method="post">
    <button type="submit" class="btn btn-warning">Déconnexion</button>
</form>

</body>
</html>


<?php


try {
    $conn = new PDO("mysql:host=$host;dbname=$dbName", $dbUser, $dbPassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Récupérer les résultats des matchs
    $stmtResultats = $conn->prepare("SELECT r.id_equipe1, r.id_equipe2, r.score_equipe1, r.score_equipe2, r.id_equipe_gagnante, r.id_activite, e1.nom_equipe as nom_equipe1, e2.nom_equipe as nom_equipe2, a.nom_activite FROM Resultat r LEFT JOIN Equipe e1 ON r.id_equipe1 = e1.id_equipe LEFT JOIN Equipe e2 ON r.id_equipe2 = e2.id_equipe LEFT JOIN Activite a ON r.id_activite = a.id_activite");
    $stmtResultats->execute();
    $resultats = $stmtResultats->fetchAll(PDO::FETCH_ASSOC);

} catch(PDOException $e) {
    echo "Erreur : " . $e->getMessage();
    exit;
}
?>
