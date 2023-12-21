<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion Admin</title>
    <link href="/webweek/css/style.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
                    <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                     
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="/webweek/poo/inscription.php">Inscription</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="#">Partenaire</a>
                        </li>
                        <li class="nav-item">
                     <div class="logo">   </div>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="/webweek/php/equipe.php">Equipe</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link mx-lg-2" href="/webweek/php/resultat.php">Classement</a>
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

    <section class="containerform forms">
        <div class="form connexion">
            <div class="textconnexion">
                <header>Se connecter</header>
    
                <!-- Assurez-vous que 'action' pointe vers votre script PHP -->
                <form action="admin_login_process.php" method="post">
                    <div class="field text_champ">
                        <!-- Ajoutez l'attribut 'name' à chaque input -->
                        <input type="text" id="username"  placeholder="Nom d'utilisateur" name="username" required><br>
                    </div>
    
                    <div class="field text_champ">
                    <input type="password" id="password"  placeholder="Mots de passe" name="password" required><br>

                        <i class='bx bx-hide eye__icon'></i>
                    </div>
    
                    <div class="field bouton__field">
                        <!-- Assurez-vous que le bouton est de type 'submit' -->
                        <button type="submit">connexion</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
    <!-- Boostrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
            crossorigin="anonymous"></script>
</html>
