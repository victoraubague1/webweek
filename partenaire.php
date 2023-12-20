<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classement</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        <link href="../webweek/css/style.css" rel="stylesheet">
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

<main class="container-xl py-5">
    <h2 class="text-center my-5">Partenaire</h2>

    <ul class="row list-unstyled galerie">
        <li class="col-md-6">
            <a data-bs-toggle="modal" data-bs-target="#modal-imagen" data-bs-imagen="galerie_01">
            <img class="img-fluid image-arrondie" src="./img/spot.jpg" alt="test">  
            </a>
        </li>

        <li class="col-md-6">
            <a data-bs-toggle="modal" data-bs-target="#modal-imagen" data-bs-imagen="galerie_02">
            <img class="img-fluid image-arrondie" src="./img/spot.jpg" alt="test">
            </a>
        </li>

        <li class="col-md-6">
            <a data-bs-toggle="modal" data-bs-target="#modal-imagen" data-bs-imagen="galerie_03">
            <img class="img-fluid image-arrondie" src="./img/spot.jpg" alt="test">
            </a>
        </li>
        
        <li class="col-md-6">
            <a data-bs-toggle="modal" data-bs-target="#modal-imagen" data-bs-imagen="galerie_04">
            <img class="img-fluid image-arrondie" src="./img/spot.jpg" alt="test">
            </a>
        </li>
        
        <li class="col-md-6">
            <a data-bs-toggle="modal" data-bs-target="#modal-imagen" data-bs-imagen="galerie_05">
            <img class="img-fluid image-arrondie" src="./img/spot.jpg" alt="test">
            </a>
        </li>
        
        <li class="col-md-6">
            <a data-bs-toggle="modal" data-bs-target="#modal-imagen" data-bs-imagen="galerie_06">
            <img class="img-fluid image-arrondie" src="./img/spot.jpg" alt="test">
            </a>
        </li>

        <li class="col-md-6">
            <a data-bs-toggle="modal" data-bs-target="#modal-imagen" data-bs-imagen="galerie_07">                    
            <img class="img-fluid image-arrondie" src="./img/spot.jpg" alt="test">
            </a>
        </li>

        <li class="col-md-6">
            <a data-bs-toggle="modal" data-bs-target="#modal-imagen" data-bs-imagen="galerie_08">
            <img class="img-fluid image-arrondie" src="./img/spot.jpg" alt="test">
            </a>
        </li>

       
    </ul>
</main>
</body>
</html>
