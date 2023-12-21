
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
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
 
     
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">LogoHAHAHAH</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-center align-items-center flex-grow-1 pe-3">
                        
                    <li class="nav-item">
                     <div class="logo">   </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="inscription.php">Inscription</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="../php/partenaire.php">Partenaire</a>
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
    <div class="php">


  

    <!-- Boostrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</div>
</body>

</html>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription Participant</title>
</head>
<body>
<div id="php"> </div>


<section id="itamsection">
<div class="container">
    <h2 class="itam text-center mb-4">TARIFS</h2>
    <div class="row">
        <?php 
            include '../php/config.php';

            try {
                $conn = new PDO("mysql:host=$host;dbname=$dbName", $dbUser, $dbPassword);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $stmt = $conn->prepare("SELECT categorie, tarif FROM groupe");
                $stmt->execute();
                $tarifs = $stmt->fetchAll(PDO::FETCH_ASSOC);

                foreach ($tarifs as $tarif) {
                    $categ = htmlspecialchars($tarif['categorie']);
                    $prix = htmlspecialchars($tarif['tarif']);
                    echo "<div class='col-md-4 mb-4'>";
                    echo "    <div class='card' style='width: 18rem;'>";
                    echo "        <img src='../img/logo1.png' class='card-img-top' alt='test'>";
                    echo "        <div class='card-body'>";
                    echo "            <h5 class='card-title'>$categ</h5>";
                    echo "            <p class='card-text'>$prix € / an</p>";
                    echo "            <a href='#' class='btn btn-primary'>S'inscrire</a>";
                    echo "        </div>";
                    echo "    </div>";
                    echo "</div>";
                }
            } catch(PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
            }
        ?>
    </div>
</div>
<!-- Plus d'info programme -->
<div class="row">
    <div class="col-md-12">
      <div class="info_programme">
        <h2>Plus d'info sur le programme</h2>
        <a href="../index.php#ancre_programme" class="btn button_inscription">CLIQUE ICI</a>
      </div>
    </div>
  </div>
</div>
<div class="formulaire_insc mt-5">
    <h1 class="mb-4">INSCRIPTION</h1>
    <form action="inscriptionscript.php" method="post" enctype="multipart/form-data">
        <div class="form-group text-center mx-auto">
            <input type="text" id="nom" name="nom" required pattern="[A-Za-z]+" placeholder="Nom">
        </div>
        <div class="form-group text-center mx-auto">
            <input type="text" id="prenom" name="prenom" required pattern="[A-Za-z]+" placeholder="Prénom">
        </div>
        <div class="form-group text-center mx-auto">
            <input type="number" id="age" name="age" required min="10" max="100" placeholder="Âge">
        </div>
        <div class="form-group text-center mx-auto">
            <label for="photo">Photo:</label>
            <input type="file" id="photo" name="photo" accept="image/png, image/jpeg">
        </div>
        <div class="form-group text-center mx-auto">
            <input type="number" id="id_equipe" name="id_equipe" required placeholder="Id-equipe">
        </div>
        <input type="submit" class="btn btn-inscription" value="S'INSCRIRE">
    </form>
</body>
</html>
