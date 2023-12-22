<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Accueil</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link href="../css/style.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	<link href="css/style.css" rel="stylesheet">
</head>

<body>
	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg fixed-top">
		<div class="container">
			<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
				<div class="offcanvas-header">
					<h5 class="offcanvas-title" id="offcanvasNavbarLabel">
						PuyFoot
					</h5>
					<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
				</div>
				<div class="offcanvas-body">
					<ul class="navbar-nav justify-content-center align-items-center flex-grow-1 pe-3">
						<li class="nav-item">
							<a href="./index.php">
								<div class="logo"></div>
						</li>
						<li class="nav-item"><a class="nav-link mx-lg-2" href="poo/inscription.php">Inscription</a></li>
						<li class="nav-item"><a class="nav-link mx-lg-2" href="php/partenaire.html">Partenaire</a></li>
						<li class="nav-item"></li>
						<li class="nav-item"><a class="nav-link mx-lg-2" href="php/equipe.php">Equipe</a></li>
						<li class="nav-item"><a class="nav-link mx-lg-2" href="php/resultat.php">Classement</a></li>
					</ul>
				</div>
			</div>
			<button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
		</div>
	</nav>
	<div class="php"></div>
	<!-- Hero Section -->
	<div class="banner">
		<div id="countdown">
			L'Évènement commence dans
		</div>
	</div>
	<section class="jumbotron jumbotron-fluid jumbotron-custom">
		<div class="container text-center">
			<div class="text-background">
				<h1 class="display-4">Puy-lympiade d'hiver</h1>
				<p class="lead">
					Sur la glace, le ballon trace : Puy-lympiade d'hiver, l'equipe du Puy Foot en lumiere !
				</p>
			</div>
		</div>
	</section>
	<div class="evenement1">
		<br>
		<br>
		<section class="section-margin">
			<div class="container text-center text-white">
				<h2 class="pb-5">Information</h2>
				<div class="row">
					<div class="col">
						<img src="./img/emplacement.png" class="icon">
						<br>
						<br>
						<p class="explication-titre ">
							Où ?
						</p>
						<p class="explication-text">
							Aux Estables, à proximite des piste de ski, des parcours en un minimum de temps avec ton equipe.
						</p>
					</div>
					<div class="col">
						<img src="./img/calendrier.png" class="icon">
						<br>
						<br>
						<p class="explication-titre ">
							Quand ?
						</p>
						<p class="explication-text">
							Le 14 Décembre tout au long de la journee. Vous retrouverez la programmation complete ainsi que les horaires.
						</p>
					</div>
					<div class="col">
						<img src="./img/ballon-de-foot.png" class="icon">
						<br>
						<br>
						<p class="explication-titre ">
							Évènement ?
						</p>
						<p class="explication-text">
							Une aventure sportive et festive qui rechauffera les coeurs en plein hiver.
						</p>
					</div>
		</section>
	</div>
	<section class="Avertissement">
		<br>
		<br>
		<strong>Le nombre de place étant limité, nous vous invitons à réserver pour votre équipe de 6 personnes au plus vite.</strong>
		<br>
		<br>
		<br>
		<!-- Utilisation de la grille de Bootstrap -->
		<div class="row">
			<!-- Colonne de gauche -->
			<div class="col-md-6">
				<h4>ACCES</h4>
				<p>
					Liaisons françaises :
					<br>
					Le Puy en Velay : 33 km
				</p>
			</div>
			<!-- Colonne de droite -->
			<div class="col-md-6">
				<h4>SUR PLACE</h4>
				<p>
					Buvette et snack tout au long de la journée.
					<br>
					A proximité des hôtels et gites.
				</p>
			</div>
		</div>
		<br>
		<br>
		<br>
		<p id="gris">
			L’association décline toute responsabilité en cas de vol !
		</p>
		<br>
		<form action="./poo/inscription.php">
			<button id="jeminscris">JE M'INSCRIS</button>
		</form>
	</section>
	</div>
	<br>
	<h2 class="text-center">ACTIVITES</h2>
	<br>
	<div id="carouselpuy" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="img/curlingdalee.png" class="d-block w-100" alt="Curling">
				<div class="carousel-caption">
					<h3>Le Curlball</h3>
					<p>
						Le curling prendra une nouvelle dimension, un jeu déjanté où la précision et la stratégie seront clés, mais toujours avec le ballon en protagoniste.
					</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="img/hockeydalle.png" class="d-block w-100" alt="Hockey">
				<div class="carousel-caption">
					<h3>Ball sur glace</h3>
					<p>
						Une version décalée du hockey sur glace avec, bien sur, un ballon au centre du jeu.
					</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="img/lugedalle.png" class="d-block w-100" alt="Luge">
				<div class="carousel-caption">
					<h3>Course en Luge</h3>
					<p>
						Decendez a toute vitesse en luge, seriez-vous capable d'éviter les attaques de ballons lors de la descente ?
					</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="img/paintballdalee.png" class="d-block w-100" alt="Paintball">
				<div class="carousel-caption">
					<h3>Paintball de neige</h3>
					<p>
						Pour les amateurs de sensations fortes, le paintball avec des boules de neiges promet des moments épiques.
					</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="img/skidalle.png" class="d-block w-100" alt="Ski">
				<div class="carousel-caption">
					<h3>Course de Ski</h3>
					<p>
						Descendre le plus rapidement, passez entre les buts pour gagner un maximum de points.
					</p>
				</div>
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselpuy" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Précédent</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselpuy" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Suivant</span>
		</button>
	</div>
	<div id="ancre_programme" class="deroulement">
		<br>
		<br>
		<br>
		<h2 class="text-center">DEROULEMENT DE LA JOURNEE</h2>
		<br>
		<br>
		<div class="container_horaires">
			<div class="horaires">
				<h3>10h Inscription</h3>
				<p>
					Accueil et validation des inscriptions
				</p>
			</div>
			<br>
			<div class="horaires">
				<h3>10h30 Briefing</h3>
				<p>
					Le président prendra la parole en résumant les parcours, le classement et les règles de sécurité à suivre
				</p>
			</div>
			<br>
			<div class="horaires">
				<h3>11h Épreuves</h3>
				<p>
					Les différents niveaux passeront sur les parcours, les arbitres prennent en compte les points et calculent le résultat
				</p>
			</div>
			<br>
			<div class="horaires">
				<h3>12h Pause Repas</h3>
				<p>
					Pause repas, un stand de snack sera disponible sur place
				</p>
			</div>
			<br>
			<div class="horaires">
				<h3>14h Reprise des épreuves</h3>
				<p>
					Seuls les 4 meilleurs chronomètres iront en demi-finale !
				</p>
			</div>
			<br>
			<div class="horaires">
				<h3>17h Remise des prix</h3>
				<p>
					Remise des prix des équipes vainqueurs
				</p>
			</div>
			<br>
			<br>
		</div>
	</div>


	<?php
	include './php/config.php';

	try {
		$conn = new PDO("mysql:host=$host;dbname=$dbName", $dbUser, $dbPassword);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = "SELECT a.nom_activite, ae.id_equipe 
            FROM activite a
            JOIN activite_equipe ae ON a.id_activite = ae.id_equipe";
		$stmt = $conn->prepare($sql);
		$stmt->execute();

		$resultats = $stmt->fetchAll(PDO::FETCH_ASSOC);
	} catch (PDOException $e) {
		echo "Erreur : " . $e->getMessage();
	}
	?>
	<div class="container half-width-container mt-6">
		<div class="titre">
			<h1 class="text-center mt-4">Activites Prevues</h1>
		</div>
		<br>
		<?php


		try {
			$conn = new PDO("mysql:host=$host;dbname=$dbName", $dbUser, $dbPassword);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$sql = "SELECT a.nom_activite, a.lieu, e.nom_equipe, ae.heure 
                    FROM activite_equipe ae
                    JOIN activite a ON ae.id_activite = a.id_activite
                    JOIN equipe e ON ae.id_equipe = e.id_equipe";
			$stmt = $conn->prepare($sql);
			$stmt->execute();

			$resultats = $stmt->fetchAll(PDO::FETCH_ASSOC);
		} catch (PDOException $e) {
			echo "Erreur : " . $e->getMessage();
		}

		if (!empty($resultats)) :
		?>
			<table class="table table-primary table-hover">
				<thead>
					<tr>
						<th>Activité</th>
						<th>Nom de l'Équipe</th>
						<th>Lieu</th>
						<th>Heure</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($resultats as $ligne) : ?>
						<tr>
							<td><?php echo htmlspecialchars($ligne['nom_activite']); ?></td>
							<td><?php echo htmlspecialchars($ligne['nom_equipe']); ?></td>
							<td><?php echo htmlspecialchars($ligne['lieu']); ?></td>
							<td><?php echo htmlspecialchars($ligne['heure']); ?></td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		<?php else : ?>
			<p class="text-center">Aucune activité prévue trouvée.</p>
		<?php endif; ?>
	</div>
	<br><br>
	<?php include('footer.html') ?>

</body>
<!-- Bootstrap JS  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<script src="./js/script.js"></script>

</html>