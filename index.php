<?php
include "article.php";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Bienvenue sur le blog de Jean Forteroche. C’est une grande joie pour moi de vous présenter mon prochain roman; Billet simple pour l'Alaska au fur et à mesure que j’avancerai dans son écriture."/>
	<meta name="keywords" content="blog, billet simple pour l'Alaska, Jean Forteroche, roman">
	<title>Jean Forteroche</title>
	<meta property="og:image" content="/og-image.jpg">
	<meta property="og:image:width" content="1051">
	<meta property="og:image:height" content="550">
	<meta property="og:title" content="Jean Forteroche : Billet simple pour l'Alaska !">
	<meta property="og:type" content="website">
	<meta property="og:description" content="Bienvenue sur le blog de Jean Forteroche. C’est une grande joie pour moi de vous présenter mon prochain roman; Billet simple pour l'Alaska au fur et à mesure que j’avancerai dans son écriture">
	<meta property="og:url" content="http://jeanforteroche.sruodesign.fr">
	<meta name="viewport" content="initial-scale=1.0,width=device-width"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="fontawesome-free-5.9.0-desktop/css/all.css"/>
</head>
<body>
	<main>
		<!-- Header du site avec barre de navigation-->
		<header>
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<a class="navbar-brand" href="index.php"><img src="image/logo_jean.png" alt="logo du blog Jean Forteroche" /></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="index.php"><i class="fas fa-home"></i>Accueil<span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="chapitres.php"><i class="fas fa-book-open"></i>Chapitres</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="apropos.php"><i class="fas fa-address-card"></i>À propos</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contact.php"><i class="fas fa-envelope"></i>Contact</a>
						</li>					
					</ul>
					<form class="form-inline my-2 my-lg-0">
						<input class="form-control mr-sm-2" type="search" placeholder="Rechercher" aria-label="Search">
						<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
					</form>
				</div>
			</nav>
		</header>
		<!-- Section 1 du site avec image d'accueil-->
		<section class="welcome">
			<div class="welcome">
				<h1><img src="image/alaska2.jpg" class="img-fluid" alt="Responsive image"/></h1>
				<a href="#presentation" class="btn btn-primary btn-lg active" role="button" aria-pressed="true"><i class="fas fa-chevron-down"></i></a>
			</div>
		</section>
		<!--Section 2 -->
		<section>
			<div id="presentation" class="container-fluid container1">
				<div  class="message">
					<h1>Bienvenue sur mon blog</h1>
					<p>C’est une grande joie pour moi de vous présenter mon prochain roman "Billet simple pour l'Alaska" au fur et à mesure que j’avancerai dans son écriture. Ensemble nous allons voyager au cœur de l’Alaska, au travers des yeux de Carlito, tout juste sorti de prison...</p>
				</div>
			</div>	
		</section>
		<!-- Section 3 -->
		<section>	
			<div class="container-fluid container2">
				<div class="row">
					<p class="info"><i class="fas fa-hand-point-down"></i>Cliquez sur les vignettes<i class="fas fa-hand-point-down"></i></p>
					<div class="card_blue">
						<div class="face face1">
							<div class="content_card">
								<div class="logo">
									<i class="fas fa-book-reader"></i>
								</div>
								<h3 id="chapitres">Chapitres</h3>	
							</div>
						</div>
						<div class="face face2">
							<div class="content_card">
								<p>L'aventure de Carlito commence ici. Chaque semaine je publie un nouveau chapitre.</p>
								<a href="chapitres.php">En savoir plus</a>
							</div>
						</div>
					</div>
					<div class="card_blue">
						<div class="face face1">
							<div class="content_card">
								<div class="logo">
									<i class="fas fa-address-card"></i>
								</div>
								<h3>Jean Forteroche</h3>	
							</div>
						</div>
						<div class="face face2">
							<div class="content_card">
								<p>Ado turbulent, adulte rebel, qui suis je vraiment ? Découvre ce que j'ai décidé de faire de ma vie.</p>
								<a href="apropos.php">En savoir plus</a>
							</div>
						</div>
					</div>
					<div class="card_blue">
						<div class="face face1">
							<div class="content_card">
								<div class="logo">		
									<i class="fas fa-comment"></i>
								</div>	
								<h3>Contact</h3>	
							</div>
						</div>
						<div class="face face2">
							<div class="content_card">
								<p>Le partage est à la base de toute relation. Je reste toujours à l'écoute de mes lecteurs.</p>
								<a href="contact.php">En savoir plus</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Section 4 poste du dernier article en php-->
		<!-- php des articles -->
		<section>
			<h1 class="news">Dernier chapitre en ligne</h1>
			<?php
			foreach ($articles as $article) :
			?>	
			<article class="chapter">
				<div class="media">
					<div class="media_heading">
						<img src="<?= $article["image"] ;?>" class="mr-3" alt="<?= $article["image"];?>">
					</div>
				  	<div class="media-body">
				  		<p class="date">Publié le : <time datetime="<?= $article["publication"]; ?>"><?= $article["publication"]; ?></time></p>
					    <h5 class="mt-0"><?= $article["titre"];?></h5>
					    <p><?= $article["resume"];?></p>
					    <a href="article.php?id=<?= $article["id"];?>">Lire le chapitre</a>
				  	</div>
				</div>
			</article>
			<?php
			endforeach;
			?>		
		</section> |

		<!-- Footer -->
		<footer class="page-footer font-small blue-grey lighten-5">
			<div class="social">
				<h6 class="mb-0">Retrouvez moi sur les réseaux sociaux </h6>
				<div class="col-md-6 col-lg-7 text-center text-md-right">
					<!-- Facebook -->
					<a class="fb-ic" href="https://www.facebook.com">
						<i class="fab fa-facebook-f white-text mr-4"></i>
					</a>
					<!-- Twitter -->
					<a class="tw-ic" href="https://twitter.com">
						<i class="fab fa-twitter white-text mr-4"></i>
					</a>
					<!--Instagram-->
					<a class="ins-ic" href="https://www.instagram.com">
						<i class="fab fa-instagram white-text"></i>
					</a>
				</div> 
			</div> 
			<!-- Footer liens -->
			<div class="container text-center text-md-left mt-5">
				<!-- Grid row -->
				<div class="row mt-3 dark-grey-text">
					<!-- Grid column -->
					<div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

						<!-- Liens à propos -->
						<h6 class="text-uppercase font-weight-bold">À propos</h6>
						<p>
							<a class="dark-grey-text" href="mention.php">Mentions légales</a>
						</p>
						<p>
							<a class="dark-grey-text" href="politique.php">Politique de confidentialité</a>
						</p>
					</div>
					<!-- Grid column -->
					<div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
						<!-- Liens Contact -->
						<h6 class="text-uppercase font-weight-bold">Contact</h6>
						<p>
							<a class="dark-grey-text" href="contact.php">Contactez-moi</a>
						</p>
						<p>
							<a class="dark-grey-text" href="partenaires.php">Partenaires</a>
						</p>
						<p>
							<a class="dark-grey-text" href="shop.php">Shop</a>
						</p>
					</div>
					<!-- Grid column -->
					<div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
						<!-- Liens Connexion -->
						<h6 class="text-uppercase font-weight-bold">Connexion</h6>
						<p>
							<a class="dark-grey-text" href="connexion.php">Administration</a>
						</p>
					</div>
				</div>
			</div>
			<!-- Copyright -->
			<div class="footer-copyright text-center text-black-50 py-3">
				<p>© 2019 Copyright:
					<a class="dark-grey-text" href="#"> Jean Forteroche / SruoDesign</a>
				</p>
			</div>
		</footer>
	</main>		
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>	  
</body>
</html>
