
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        <link href="css/style.css" rel="stylesheet">
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
                             <div class="logo"> <a href="/webweek/index.php"></a>   </div>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="poo/inscription.php">Inscription</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="#">Partenaire</a>
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
           
            <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
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

    <div class="container py-3">
    <div class="row text-white">
        <!-- Colonne "OÙ ?" -->
        <div class="col-md-4 mb-3">
      
            
                    <h3 class="card-title">OÙ ?</h3>
                
            
        
        </div>
        
        <!-- Colonne "ÉVÉNEMENT ?" -->
        <div class="col-md-4 mb-3">

               
                    <h3 class="card-title">ÉVÉNEMENT ?</h3>
              
         
        </div>

        <!-- Colonne "QUAND ?" -->
        <div class="col-md-4 mb-3">
   
           
                    <h3 class="card-title">QUAND ?</h3>
                
          
        </div>
    </div>
</div>
<div class="evenement2">
<div class="container py-3">
    <div class="row text-white">
        <!-- Colonne "OÙ ?" -->
        <div class="col-md-4 mb-3">
            <div class="card custom-card">
                <div class="card-body">
                    <p class="card-text">Aux Estables, à proximité des pistes de ski, des parcours en un minimum de temps avec ton équipe.</p>
                </div>
            </div>
        </div>
        
        <!-- Colonne "ÉVÉNEMENT ?" -->
        <div class="col-md-4 mb-3">
            <div class="card custom-card">
                <div class="card-body">
                    <p class="card-text">Une aventure sportive et festive qui réchauffera les cœurs en plein hiver.</p>
                </div>
            </div>
        </div>

        <!-- Colonne "QUAND ?" -->
        <div class="col-md-4 mb-3">
            <div class="card custom-card">
                <div class="card-body">
                    <p class="card-text">Le 14 décembre tout au long de la journée. Vous retrouverez la programmation complète ainsi que les horaires.</p>
                    <a href="#" class="stretched-link">Inscription</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
      
<div id="ancre_programme" class="deroulement">
        <h2 class="text-center">DEROULEMENT DE LA JOURNEE</h2>
        <div class="container_horaires">
            <div class="horaires">
                <h3>10h Inscription</h3>
                <p>Accueil et validation des inscriptions</p>
            </div>
            <div class="horaires">
                <h3>10h30 Briefing</h3>
                <p>Le président prendra la parole en résumant les parcours, le classement et les règles de sécurité à suivre</p>
            </div>
            <div class="horaires">
                <h3>11h Épreuves</h3>
                <p>Les différents niveaux passeront sur les parcours, les arbitres prennent en compte le chrono et le résultat</p>
            </div>
            <div class="horaires">
                <h3>12h Pause Repas</h3>
                <p>Pause repas, un stand de snack sera disponible sur place</p>
            </div>
            <div class="horaires">
                <h3>14h Reprise des épreuves</h3>
                <p>Seuls les 4 meilleurs chronomètres iront en demi-finale !</p>
            </div>
            <div class="horaires">
                <h3>17h Remise des prix</h3>
                <p>Remise des prix des équipes vainqueurs</p>
            </div>
        </div>
    </div>
    <!-- Boostrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
            crossorigin="anonymous"></script>
</body>
</html>
