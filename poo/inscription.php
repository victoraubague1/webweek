<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>girlz</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        <link href="../css/style.css" rel="stylesheet">
</head>

<body>
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
                            <a class="nav-link mx-lg-2" href="../php/equipe.php">Equipe</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link mx-lg-2" href="../php/resultat.php">Classement</a>
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
    <div class="php"> </div>


<section id="itamsection">
<div class="container">
<br><br>
    <div class="titre"> <h1 class="text-center mb-4">TARIFS</h2> </div>
    <div class="row">
       
    <?php
            include '../php/config.php';

            try {
                $conn = new PDO("mysql:host=$host;dbname=$dbName", $dbUser, $dbPassword);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

              
                $stmt = $conn->prepare("SELECT * FROM groupe"); 
                $stmt->execute();
                $tarifs = $stmt->fetchAll(PDO::FETCH_ASSOC);

                foreach ($tarifs as $tarif) {
                    echo "<div class='col-md-4'>";
                    echo "    <div class='card card-custom mb-4'>";
                    echo "        <div class='card-header card-header-custom text-center'>";
                    echo              htmlspecialchars($tarif['categorie']);
                    echo "        </div>";
                    echo "        <div class='card-body card-body-custom' class='modifcentre'>";
                    echo "            <p class='tarif-text'>" . htmlspecialchars($tarif['tarif']) . " €*</p>";
                    echo "            <p class='tranche-age-text'>" . htmlspecialchars($tarif['tranche_age']) . "</p>";
                    echo "            <a href='inscription.php?tarif=" . urlencode($tarif['id_groupe']) . "' class='btn btn-custom'>Je m'inscris</a>";
                    echo " <p> *Prix par personne    </p>        ";

                    echo "        </div>";
                    echo "    </div>";
                    echo "</div>";
                }
            } catch(PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
            ?>
        </div>
    </div>

<div class="row">
    <div class="col-md-12">
      <div class="info_programme">
        <h2>Plus d'info sur le programme</h2>
        <a href="../index.php#ancre_programme" class="btn button_inscription">CLIQUE ICI</a>
      </div>
    </div>
  </div>
</div>


<?php
include 'configpoo.php';

$configInstance = new Config();
$db = $configInstance->connect();


$stmt = $db->query("SELECT id_groupe, categorie FROM groupe");
$groupes = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


<div class="formulaire_insc mt-5">
  <div class="titre">      <h1 class="mb-4">INSCRIPTION EQUIPE</h1> </div>
        <form action="inscriptionscript.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Nom de l'équipe:</label>
                <input type="text" name="nom_equipe" required placeholder="Nom de l'équipe">
            </div>
            <div class="form-group">
                <label>Groupe:</label>
                <select name="id_groupe" required>
                    <?php foreach ($groupes as $groupe): ?>
                        <option value="<?php echo $groupe['id_groupe']; ?>">
                            <?php echo htmlspecialchars($groupe['categorie']); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            
    <div class="formulaire_insc mt-5">
     <div class="titre">   <h1 class="mb-4">INSCRIPTION JOUEUR</h1> </div>
        <form action="inscriptionscript.php" method="post" enctype="multipart/form-data">
            <!-- Champ caché pour l'ID d'équipe -->
            <input type="hidden" name="id_equipe" value="<?php echo $next_team_id; ?>">

            <!-- Membre 1 -->
            <div class="form-group">
                <label>Nom Joueur 1:</label>
                <input type="text" name="nom1" required placeholder="Nom">
                <label>Prénom Joueur 1:</label>
                <input type="text" name="prenom1" required placeholder="Prénom">
                <label>Âge Joueur 1:</label>
                <input type="number" name="age1" required placeholder="Âge">
                <p> Envoyer votre photo par mail au puyfoot@entreprise.com </p>
            </div>

            <!-- Membre 2 -->
            <div class="form-group">
                <label>Nom Joueur 2:</label>
                <input type="text" name="nom2" required placeholder="Nom">
                <label>Prénom Joueur 2:</label>
                <input type="text" name="prenom2" required placeholder="Prénom">
                <label>Âge Joueur 2:</label>
                <input type="number" name="age2" required placeholder="Âge">
                <p> Envoyer votre photo par mail au puyfoot@entreprise.com </p>
            </div>

            <!-- Membre 3 -->
            <div class="form-group">
                <label>Nom Joueur 3:</label>
                <input type="text" name="nom3" required placeholder="Nom">
                <label>Prénom Joueur 3:</label>
                <input type="text" name="prenom3" required placeholder="Prénom">
                <label>Âge Joueur 3:</label>
                <input type="number" name="age3" required placeholder="Âge">
                <p> Envoyer votre photo par mail au puyfoot@entreprise.com </p>
            </div>

            <input type="submit" class="btn button_inscription" value="S'INSCRIRE">
        </form>
    </div>
</div>
</section>
                    
</body>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <p>Le puy foot 43 - puy-lympiades d'hiver &copy; 2023</p>
            </div>

            <div class="col-md-4">
                <nav class="nav">
                    <a class="nav-item" href="../index.php">Accueil</a>
                    <a class="nav-item" href="inscription.php">Inscription</a>
                    <a class="nav-item" href="../php/equipe.php">Equipe</a>
                    <a class="nav-item" href="../php/resultat.php">Classement</a>
                    <a class="nav-item" href="../php/partenaire.php">Partenaire</a>
                </nav>
            </div>

            <div class="col-md-4">
                <p>Email: puyfoot@entreprise.com</p>
                <a href="../php/admin.php"><p>👤 Administrateur</p></a>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</html>