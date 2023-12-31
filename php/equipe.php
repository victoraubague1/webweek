<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>girlz</title>

    <!-- Bootstrap CSS pr les librairies -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link href="../css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">


            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">LogoHAHAHAH</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-center align-items-center flex-grow-1 pe-3">
                        <li class="nav-item">
                            <div class="logo"> </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="../poo/inscription.php">Inscription</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="partenaire.php">Partenaire</a>
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


            <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <div class="espace_navbar">
    <!-- Fin de la navbar -->
    <?php 


        include '../php/config.php';

        try {
            $conn = new PDO("mysql:host=$host;dbname=$dbName", $dbUser, $dbPassword);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Récupération de toutes les équipes
            $stmtEquipes = $conn->prepare("SELECT * FROM Equipe");
            $stmtEquipes->execute();
            $equipes = $stmtEquipes->fetchAll(PDO::FETCH_ASSOC);

            $compteurEquipe = 1; // Initialisation du compteur d'équipe


            foreach ($equipes as $equipe) {
                echo '<div class="row mb-3">';
                echo '<div class="col-12 text-center"><h2>Équipe ' . $compteurEquipe . ': ' . htmlspecialchars($equipe['nom_equipe']) . '</h2></div>';



                // Récupération et affichage des joueurs de l'équipe
                $stmtJoueurs = $conn->prepare("SELECT * FROM Participant WHERE id_equipe = ?");
                $stmtJoueurs->execute([$equipe['id_equipe']]);
                $joueurs = $stmtJoueurs->fetchAll(PDO::FETCH_ASSOC);

                foreach ($joueurs as $joueur) {
                    echo '<div class="col-sm-6 col-md-4 col-lg-4 mb-3">';
                    echo '<div class="card position-relative">';
                    echo '<img src="' . htmlspecialchars($joueur['photo_participant']) . '" class="card-img-top" alt="Photo de ' . htmlspecialchars($joueur['prenom']) . '">';
                    echo '<div class="card-body position-absolute text-center" style="bottom: 0; left: 0; right: 0;     background-color: rgba(67, 76, 255, 0.7);  color: white;">';
                    echo '<h5 class="card-title">' . htmlspecialchars($joueur['nom']) . ' ' . htmlspecialchars($joueur['prenom']) . '</h5>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }

                echo '</div>';

                $compteurEquipe++; // Incrémentation du compteur pour la prochaine équipe
            }
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        ?>



    </div>



</html>


<!-- Boostrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>

<?php
include '../php/config.php';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbName", $dbUser, $dbPassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $stmt = $conn->prepare("SELECT nom FROM participant");
    $stmt->execute();
    $noms = $stmt->fetchAll(PDO::FETCH_COLUMN, 0);
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
    exit;
}

$participants = [];
$search = '';

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['search'])) {
    $search = $_POST['search'];

    // Recherche des participants par nom
    $stmt = $conn->prepare("SELECT * FROM participant WHERE nom LIKE :search OR prenom LIKE :search");
    $stmt->execute(['search' => "%$search%"]);
    $participants = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Recherche de Participants</title>
</head>
<div class="container d-flex justify-content-center align-items-center ">
    <div class="text-center">
        <h2>Recherche de Participants</h2>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input type="text" name="search" placeholder="Entrez le nom ou prénom du participant" list="noms-list" value="<?php echo $search; ?>">
            <datalist id="noms-list">
                <?php foreach ($noms as $nom) : ?>
                    <option value="<?php echo htmlspecialchars($nom); ?>">
                    <?php endforeach; ?>
            </datalist>
            <button type="submit">Rechercher</button>
        </form>

        <?php if (!empty($participants)) : ?>
            <table class="table">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Âge</th>
                        <th>Photo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($participants as $participant) : ?>
                        <tr>
                            <td><?php echo htmlspecialchars($participant['nom']); ?></td>
                            <td><?php echo htmlspecialchars($participant['prenom']); ?></td>
                            <td><?php echo htmlspecialchars($participant['age']); ?></td>
                            <td>
                                <?php if ($participant['photo_participant']) : ?>
                                    <img src="<?php echo htmlspecialchars($participant['photo_participant']); ?>" alt="Photo" style="width: 100px;">
                                <?php else : ?>
                                    Pas de photo
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php elseif ($_SERVER["REQUEST_METHOD"] == "POST") : ?>
            <p>Aucun participant trouvé pour "<?php echo htmlspecialchars($search); ?>".</p>
        <?php endif; ?>
    </div>
    </body>

</html>