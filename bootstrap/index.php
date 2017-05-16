<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Accueil Café Kilimandjaro</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
	<!-- less Css -->
	<link rel="stylesheet" media="screen" href="css/out.css" />
	
	<!-- css personnalisée -->
    <link href="css/styles.css" rel="stylesheet">
	

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<?php
	//require 'less/lessc.inc.php';

	//try {
	//	 lessc::ccompile('input.less', 'out.css');
	//} catch (exception $ex) {
	//	 exit('lessc fatal error:
	//	 '.$ex->getMessage());
	//}
	?>
  </head>
  <body>
  
  <header>
	
	<nav class="navbar navbar-default">
	  <ul class="nav navbar-nav">
		<li role="presentation" class="active"><a href="#">Accueil</a></li>
		<li role="presentation"><a href="#">Café Moulu</a></li>
		<li role="presentation"><a href="#">Café en grain</a></li>
		<li role="presentation"><a href="#">Histoire du café</a></li>
		<li role="presentation"><a href="#">Nous trouver</a></li>
		<li role="presentation"><a href="#">Professionnel</a></li>
	  </ul>
	</nav>
	<!-------------------->
	<!--    CAROUSEL     ->
	<!-------------------->	  
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
		<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-example-generic" data-slide-to="1"></li>
		<li data-target="#carousel-example-generic" data-slide-to="2"></li>
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
		<div class="item active">
		  <img src="img/carousel-1.jpg" alt="Graines de café">
		</div>
		<div class="item">
		  <img src="img/carousel-2.jpg" alt="Tasse de café">
		</div>
		<div class="item">
		  <img src="img/carousel-3.jpg" alt="Tasse de café">
		</div>
	  </div>

	  <!-- Controls -->
	  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	  </a>
	</div>
  </header>  
  
  <main>
	<section>
	  <div class="row">
		<h1>Pourquoi choisir café Kilimandjaro ?</h1>
	  </div>
	  <div class="row">
		<article class="col-md-4 col-sm-4">
				  <h2>Un café unique</h2>
				  <p>Nous proposons une sélection restreinte de cafés grains
				  et moulus pour ne pas perdre de temps à choisir le meilleur café. 
				  Faites confiance en notre sélection. </p>
		</article>
		<article class="col-md-4 col-sm-4">
				  <h2>Des prix maitrisés</h2>
				  <p>Grâce aux relations étroites avec nos fournisseurs nous
				  proposons des prix adaptés aux petites entreprises. Profitez
				  des prix de gros adaptés aux professionnels. 
				  Tout le monde à le droit de boire du bon café au bureau !  </p>
		</article>
		<article class="col-md-4 col-sm-4">
				  <h2>Un Paiement en Ligne Sécurisé</h2>
				  <p>La banque CIC assure vos paiements en ligne grâce à la
				  technologie 3D secure. Si vous préférez, validez votre sélection
				  de cafés et thés simplement avec votre compte PayPal !</p>
		</article>
	  </div>
	</section>
	<!-- ---- -->
	<!-- Prod -->
	<!-- ---- -->
    <section>
      <div class="row"> 
		<h1>Nos produits phares</h1>
	  </div>      
	  
	  <div class="row">
		<article class="col-md-4 col-sm-4">
			<div class="photo-produit">
				<img src="img/produit-cafe-kilimandjaro-1.gif" alt="Shira" title="Shira" />
			</div>
			<h2>Shira</h2>
			<p>Café moulu, paquet de 250g, intensité 5, famille aromatique intense</p>
			<hr>
			<div>
				<p class="prix-unite">7,<span class="prix-centimes">95 €</span>
				<a href="#"><img class="bouton-ajouter" src="img/bouton-ajouter-off.gif" alt="Ajouter au panier" title="Ajouter au panier" onmouseover="this.src='img/bouton-ajouter-on.gif'" onmouseout="this.src='img/bouton-ajouter-off.gif'"/></a></p>
			</div>
		</article>
		
		<article class="col-md-4 col-sm-4">
			<div class="photo-produit">
				<img src="img/produit-cafe-kilimandjaro-2.gif" alt="Mawenzi" title="Mawenzi" />
			</div>
			<h2>Mawenzi</h2>
			<p>Café moulu, paquet de 250g, intensité 5, famille aromatique intense</p>
			<hr>
			<div>
				<p class="prix-unite">7,<span class="prix-centimes">90 €</span>
				<a href="#"><img class="bouton-ajouter" src="img/bouton-ajouter-off.gif" alt="Ajouter au panier" title="Ajouter au panier" onmouseover="this.src='img/bouton-ajouter-on.gif'" onmouseout="this.src='img/bouton-ajouter-off.gif'"/></a></p>
			</div>
		</article>
		
		<article class="col-md-4 col-sm-4">
			<div class="photo-produit">                
				<img src="img/produit-cafe-kilimandjaro-3.gif" alt="Kibo" title="Kibo" />
			</div>               
			<h2>Kibo</h2>
			<p>Café moulu, paquet de 250g, intensité 5, famille aromatique intense</p>
			<hr>
			<div>
				<p class="prix-unite">8,<span class="prix-centimes">35 €</span>
				<a href="#"><img class="bouton-ajouter" src="img/bouton-ajouter-off.gif" alt="Ajouter au panier" title="Ajouter au panier" onmouseover="this.src='img/bouton-ajouter-on.gif'" onmouseout="this.src='img/bouton-ajouter-off.gif'"/></a></p>
			</div>
		</article>
	  </div>
    </section>     
	<!-- ---- -->
	<!-- Blog -->
	<!-- ---- -->
	<section id="blog">
	  <div class="row">
		<h1>Histoire du café</h1>
	  </div>
	  <div class="row">
		<article class="col-md-4 col-sm-4">
			<a href="#">
				<img src="img/tasse.jpg" />
				<div class="date-blog">
				  <p>12<br>avril<br>2017</p>
				</div>
				<div class="presentation-blog">
					<p>Le cupping : une étape primordiale dans la recherche de qualité du café</p>
				</div>
			</a>
		</article>
		<article class="col-md-4 col-sm-4">
			<a href="#">
				<img src="img/vue-kilimandjaro.jpg" />
				<div class="date-blog">
				  <p>12<br>avril<br>2017</p>
				</div>
				<div class="presentation-blog">
					<p>Le cupping : une étape primordiale dans la recherche de qualité du café</p>
				</div>
			</a>
		</article>
		<article class="col-md-4 col-sm-4">
			<a href="#">
				<img src="img/tasse.jpg" />
				<div class="date-blog">
				  <p>12<br>avril<br>2017</p>
				</div>
				<div class="presentation-blog">
					<p>Le cupping : une étape primordiale dans la recherche de qualité du café</p>
				</div>
			</a>
		</article>
	  </div>
	</section>	
	
  </main>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>