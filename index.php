<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link href="css/style.css" rel="stylesheet">

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
                            <div class="logo"><a href="../index.php"></a></div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="poo/inscription.php">Inscription</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="partenaire.php">Partenaire</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="php/equipe.php">Equipe</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="php/resultat.php">Classement</a>
                        </li>
                    </ul>
                </div>
            </div>

            <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <div class="ahah"> </div>
    <!-- Hero Section -->

    <section class="jumbotron jumbotron-fluid jumbotron-custom">
        <div class="container text-center">
            <div class="text-background">
                <h1 class="display-4">Puy-lympique d'hiver</h1>
                <p class="lead">Sur la glace, le ballon trace : Puy-lympiques d'hiver, l'equipe du Puy Foot en lumiere !</p>
            </div>
        </div>
    </section>
    <div class="evenement1">
        <br><br>
        <section class="section-margin">
            <div class="container text-center text-white">
                <h2 class="pb-5">Information</h2>
                <div class="row">
                    <div class="col">
                        <img src="./img/emplacement.png" class="icon"><br><br>
                        <p class="explication-titre ">Où ?</p>
                        <p class="explication-text">
                            Aux Estables, a proximite des piste de ski, des parcours en un minimum de temps avec ton equipe.
                        </p>
                    </div>
                    <div class="col">
                    <img src="./img/calendrier.png" class="icon"><br><br>
                        <p class="explication-titre ">Quand ?</p>
                        <p class="explication-text">
                            Le 14 Décembre tout au long de la journee. Vous retrouverez la programmation complete ainsi que les horaires.
                        </p>
                    </div>
                    <div class="col">
                    <img src="./img/ballon-de-foot.png" class="icon"><br><br>
                        <p class="explication-titre ">Évènement ?</p>
                        <p class="explication-text">
                            Une aventure sportive et festive qui rechauffera les coeurs en plein hiver </p>
                    </div>
        </section>
    </div>
    <section class="Avertissement">
        <br><br>
        <strong>Le nombre de place étant limité, nous vous invitons à réserver pour votre équipe de 6 personnes au plus vite.</strong>
        <br><br><br>
        <div class="Gauche">
            <h4>ACCES</h4>
            <p>Liaisons françaises :<br> Le Puy en Velay : 33 km</p>
        </div>
        <div class="Droite">
            <h4>SUR PLACE</h4>
            <p>Buvette et snack tout au long de la journée. <br>A proximité des hôtels et gites.</p>
        </div>
        <br><br><br>
        <p id="gris">L’association décline toute responsabilité en cas de vol !</p>
        <br>
        <button id="jeminscris">JE M'INSCRIS</button>
    </section>
    </div>
    <br>
    <h2 class="text-center">ACTIVITES</h2>
    <br>
    <div id="carouselpuy" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/curlingdalee.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/hockeydalle.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/lugedalle.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/paintballdalee.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/skidalle.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselpuy" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselpuy" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div id="ancre_programme" class="deroulement">
    <br><br><br>
        <h2 class="text-center">DEROULEMENT DE LA JOURNEE</h2>
        <br><br>
        <div class="container_horaires">
            <div class="horaires">
                <h3>10h Inscription</h3>
                <p>Accueil et validation des inscriptions</p>
            </div><br>
            <div class="horaires">
                <h3>10h30 Briefing</h3>
                <p>Le président prendra la parole en résumant les parcours, le classement et les règles de sécurité à suivre</p>
            </div><br>
            <div class="horaires">
                <h3>11h Épreuves</h3>
                <p>Les différents niveaux passeront sur les parcours, les arbitres prennent en compte le chrono et le résultat</p>
            </div><br>
            <div class="horaires">
                <h3>12h Pause Repas</h3>
                <p>Pause repas, un stand de snack sera disponible sur place</p>
            </div><br>
            <div class="horaires">
                <h3>14h Reprise des épreuves</h3>
                <p>Seuls les 4 meilleurs chronomètres iront en demi-finale !</p>
            </div><br>
            <div class="horaires">
                <h3>17h Remise des prix</h3>
                <p>Remise des prix des équipes vainqueurs</p>
            </div><br>
        </div>
    </div>
    <!-- Boostrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>