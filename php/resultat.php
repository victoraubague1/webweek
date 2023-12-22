<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classement</title>
        
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link href="../css/style.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
  
</head>

<body>
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">PuyFoot</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-center align-items-center flex-grow-1 pe-3">
                        
                    <li class="nav-item">
                    <a href="../index.php">
                     <div class="logo">   </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="../poo/inscription.php">Inscription</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link mx-lg-2" href="../php/partenaire.php">Partenaire</a>
                        </li>
                        <li class="nav-item">

     
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="equipe.php">Equipe</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link mx-lg-2" href="resultat.php">Classement</a>
                        </li>
                    </ul>
                </div>
            </div>

           
            <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <div class="php">




    </div>





<?php
include 'config.php';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbName", $dbUser, $dbPassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
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

            $stmtInsert = $conn->prepare("INSERT INTO Resultat (id_equipe1, id_equipe2, score_equipe1, score_equipe2, id_equipe_gagnante, id_activite) VALUES (:idEquipe1, :idEquipe2, :scoreEquipe1, :scoreEquipe2, :idEquipeGagnante, :idActivite)");
            $stmtInsert->bindParam(':idEquipe1', $idEquipe1);
            $stmtInsert->bindParam(':idEquipe2', $idEquipe2);
            $stmtInsert->bindParam(':scoreEquipe1', $scoreEquipe1);
            $stmtInsert->bindParam(':scoreEquipe2', $scoreEquipe2);
            $stmtInsert->bindParam(':idEquipeGagnante', $idEquipeGagnante);
            $stmtInsert->bindParam(':idActivite', $idActivite);
            $stmtInsert->execute();

            if (!empty($idEquipeGagnante)) {
                $stmtUpdatePoints = $conn->prepare("UPDATE Equipe SET points = points + 1 WHERE id_equipe = :idEquipeGagnante");
                $stmtUpdatePoints->bindParam(':idEquipeGagnante', $idEquipeGagnante);
                $stmtUpdatePoints->execute();
            }

            header("Location: " . htmlspecialchars($_SERVER["PHP_SELF"]));
            exit();
        }
    }

    $stmtResultats = $conn->prepare("SELECT r.id_equipe1, r.id_equipe2, r.score_equipe1, r.score_equipe2, r.id_equipe_gagnante, r.id_activite, e1.nom_equipe as nom_equipe1, e2.nom_equipe as nom_equipe2, a.nom_activite FROM Resultat r LEFT JOIN Equipe e1 ON r.id_equipe1 = e1.id_equipe LEFT JOIN Equipe e2 ON r.id_equipe2 = e2.id_equipe LEFT JOIN Activite a ON r.id_activite = a.id_activite");
    $stmtResultats->execute();
    $resultats = $stmtResultats->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
    exit;
}
// Initialisation des tableaux pour les statistiques
$equipes_stats = [];
$total_matchs = [];

foreach ($resultats as $resultat) {
    // Initialisation ou mise à jour du nombre total de matchs pour chaque équipe
    $total_matchs[$resultat['nom_equipe1']] = ($total_matchs[$resultat['nom_equipe1']] ?? 0) + 1;
    $total_matchs[$resultat['nom_equipe2']] = ($total_matchs[$resultat['nom_equipe2']] ?? 0) + 1;

    // Comptabilisation des victoires
    if ($resultat['id_equipe_gagnante'] == $resultat['id_equipe1']) {
        $equipes_stats[$resultat['nom_equipe1']]['victoires'] = ($equipes_stats[$resultat['nom_equipe1']]['victoires'] ?? 0) + 1;
    } elseif ($resultat['id_equipe_gagnante'] == $resultat['id_equipe2']) {
        $equipes_stats[$resultat['nom_equipe2']]['victoires'] = ($equipes_stats[$resultat['nom_equipe2']]['victoires'] ?? 0) + 1;
    }
}

foreach ($equipes_stats as $nom_equipe => &$stats) {
    $stats['pourcentage_victoires'] = ($stats['victoires'] / $total_matchs[$nom_equipe]) * 100;
}
unset($stats); 
?>

    <div class="container half-width-container mt-6">
       <div class="titre"> <h1 class="text-center mt-4">Resultats des Matchs</h1> </div>
        <?php if (!empty($resultats)) : ?>
            <table class="table  table-primary table-hover">
                <thead>
                    <tr>
                        <th>Équipe 1</th>
                        <th>Score Équipe 1</th>
                        <th>Équipe 2</th>
                        <th>Score Équipe 2</th>
                        <th>Équipe Gagnante</th>
                        <th>Activité</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($resultats as $resultat) : ?>
                        <tr>
                            <td><?php echo htmlspecialchars($resultat['nom_equipe1']); ?></td>
                            <td><?php echo htmlspecialchars($resultat['score_equipe1']); ?></td>
                            <td><?php echo htmlspecialchars($resultat['nom_equipe2']); ?></td>
                            <td><?php echo htmlspecialchars($resultat['score_equipe2']); ?></td>
                            <td><?php echo htmlspecialchars($resultat['id_equipe_gagnante'] == $resultat['id_equipe1'] ? $resultat['nom_equipe1'] : $resultat['nom_equipe2']); ?></td>
                            <td><?php echo htmlspecialchars($resultat['nom_activite']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else : ?>
            <p class="text-center">Aucun résultat trouvé.</p>
        <?php endif; ?>
    </div>

<?php
include 'config.php';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbName", $dbUser, $dbPassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Récupérer le classement des équipes
    $stmtClassement = $conn->prepare("SELECT nom_equipe, points FROM equipe ORDER BY points DESC");
    $stmtClassement->execute();
    $classement = $stmtClassement->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
    exit;
}
?>
    <div class="container half-width-container mt-6">
    <div class="titre">   <h1 class="text-center">Classement des Equipes</h1> </div>
        <table class="table table-primary table-hover"> 
            <thead>
                <tr>
                    <th>Équipe</th>
                    <th>Points</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($classement as $equipe) : ?>
                    <tr>
                        <td><?php echo htmlspecialchars($equipe['nom_equipe']); ?></td>
                        <td><?php echo htmlspecialchars($equipe['points']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="container half-width-container mt-6">
    <div class="titre"> <h1 class="text-center mt-4">Statistiques des Equipes</h1> </div>
    <table class="table table-primary table-hover">
        <thead>
            <tr>
                <th>Équipe</th>
                <th>Pourcentage de Victoires</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($equipes_stats as $nom_equipe => $stats): ?>
            <tr>
                <td><?php echo htmlspecialchars($nom_equipe); ?></td>
                <td><?php echo htmlspecialchars(number_format($stats['pourcentage_victoires'], 2)); ?> %</td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<br><br>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <p>Le puy foot 43 - puy-lympiades d'hiver &copy; 2023</p>
            </div>

            <div class="col-md-4">
                <nav class="nav">
                    <a class="nav-item" href="../index.php">Accueil</a>
                    <a class="nav-item" href="../poo/inscription.php">Inscription</a>
                    <a class="nav-item" href="equipe.php">Equipe</a>
                    <a class="nav-item" href="resultat.php">Classement</a>
                    <a class="nav-item" href="partenaire.php">Partenaire</a>
                </nav>
            </div>

            <div class="col-md-4">
                <p>Email: puyfoot@entreprise.com</p>
                <a href="../php/admin.php"><p>👤 Administrateur</p></a>
            </div>
        </div>
    </div>
</footer>
</html>

