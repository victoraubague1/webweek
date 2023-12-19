<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partenaires</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="path/to/your/custom.css" rel="stylesheet">
</head>
<body>
    <!-- Contenu de la page ici -->
    <div class="container text-center mt-5">
        <h2>Merci à nos partenaires !</h2>
        <div class="row mt-4">
            <!-- Boucle PHP pour afficher les partenaires -->
 <?php
include 'config.php'; // Assurez-vous que ce fichier contient les informations de connexion à votre base de données

try {
    // Établir la connexion à la base de données
    $conn = new PDO("mysql:host=$host;dbname=$dbName", $dbUser, $dbPassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Préparer et exécuter la requête pour récupérer les partenaires
    $stmt = $conn->prepare("SELECT nom_partenaire, logo FROM partenaire");
    $stmt->execute();
    
    // Récupérer tous les partenaires
    $partenaires = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
} catch(PDOException $e) {
    echo "Erreur : " . $e->getMessage();
    exit;
}
?>

                foreach ($partenaires as $partenaire) {
                    echo '<div class="col-6 col-md-4 col-lg-3 mb-4">';
                    echo '<div class="card">';
                    echo '<img src="'.htmlspecialchars($partenaire['image']).'" class="card-img-top" alt="'.htmlspecialchars($partenaire['alt']).'">';
                    echo '<div class="card-body">';
                    echo '<p class="card-text">'.htmlspecialchars($partenaire['nom']).'</p>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            ?>
        </div>
    </div>
    <footer class="footer mt-auto py-3 bg-dark">
        <div class="container">
            <span class="text-muted">Lorem ipsum dolor - sit amet consectetur - 2023</span>
        </div>
    </footer>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
