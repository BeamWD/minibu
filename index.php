<!doctype html>
<html>
<head>
<title>Bienvenue chez Minibu !</title>
<meta charset="utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

<meta name="keywords" content="Minibu,coiffeur,coiffure,hommes,sans,rendez-vous,Châtelet,Chatelet,place,saint-roch,"/>
<meta name="description" content="Chez Minibu, coiffure hommes - 000 Place Saint-Roch 000 Châtelet" />

<!--
<link rel="stylesheet" lang="text/css" href="" />
-->

<!-- For IE 10 and below -->
<!-- No link, just place a file called favicon.ico in the root directory -->

<!-- For IE 11, Chrome, Firefox, Safari, Opera -->
<link rel="icon" href="path/to/favicon-16.png" sizes="16x16" type="image/png" />
<link rel="icon" href="path/to/favicon-32.png" sizes="32x32" type="image/png" />
<link rel="icon" href="path/to/favicon-48.png" sizes="48x48" type="image/png" />
<link rel="icon" href="path/to/favicon-62.png" sizes="62x62" type="image/png" />

<link rel="stylesheet" href="bootstrap.css" />
<link rel="stylesheet" href="bootstrap-theme.css" />

<!-- TODO : facebok open graph markup -->
<!-- Google + ? -->

<style> /*colors*/
#header, #footer {
	background-color: lightgreen;
}
</style>

<style> /*layout*/
html, body, #map {
	margin: 0 auto;
	padding: 0 auto;
	text-align: center;
}
#footer {
	bottom: 0;
	position: fixed;
	width: 100%;
}
#main {
	margin: 1em;
}
#map {
	clear: both;
	border: 1px solid lightgreen;
  width: 325px;
  height: 300px;
}
</style>

<style> /*text*/
</style>

<style> /*other*/
</style>

</head>
<body lang="fr">
<!-- TODO : boilerplate ? no-js -->

<?php
	/*static data*/
	$adresse = "Place Saint-Rock 9, 6200 Châtelet";
	$tel = "071 17 75 55";
	$horaires = array("Lundi"=>"8h - 19h","Mardi"=>"bite","Mercredi"=>"bite","Jeudi"=>"bite","Vendredi"=>"bite","Weekend"=>"bite");
	$tarifs = array("Item"=>"Prix");

	$test = True;
?>

<div id="page">
	<div id="header">
		<header>
			<!-- Cliquer/toucher pour revenir au haut de la page -->
			<span class="btn">
				<a>
					Logo
				</a>
			</span>
			<!-- cliquer/toucher pour aller au formulaire de contact -->
			<span class="btn">
				<a>Mail
				<!--
					<span class="glyphicon glyphicon-envelope"></span>
				-->
				</a>
			</span>
			<!-- ajouter ptête plus tard
			<span class="btn">
				<a>
					Facebook
				</a>
			</span>
			-->
		</header>
	</div>
	<div id="main">
		<div id="logo">
			<img src="logo" alt="Logo Minibu" />
		</div>
		<h1>Bienvenue chez Minibu !</h1>
		<b>
			Il y a <span id="n_clients">?? (bug)</span> clients pour le moment.
		</b>
		<div id="horaires">
			Horaires ici (en php)
		</div>
		<div id="tarifs">
			Tarifs ici (en php)
		</div>
		<div id="plan">
			Lien Google Map
			<div id="map">
			</div>
		</div>
		<!-- Photo extérieur du bâtiment ? -->
		<div id="facebook">
			Lien Facebook ?
		</div>
		<!-- Facebook feed ? -->
	</div>
	<div id="footer">
		<footer>
			Footer
			<div id="test_js">
				<span style='color:red'><b>Bug js</b></span>
			</div>
			<div id="test_php">
				<?php
					if ($test == True) {
						echo "<span style='color:green'><b>PHP ok!</b></span>";
					}
					else {
						echo "<span style='color:red'><b>Bug PHP</b></span>";
					}
				?>
			</div>
		</footer>
	</div>
</div>
<script>
"use strict";
(function () {
  //test
	document.getElementById("test_js").innerHTML = "<span style='color:green'><b>Test js ok!</b></span>";
})();
</script>
<script>
  function initMap() {
    var mapDiv = document.getElementById('map');
    var map = new google.maps.Map(mapDiv, {
      center: {lat: 50.4003835, lng: 4.5293986},
      zoom: 15
    });
  }
</script>
<script src="https://maps.googleapis.com/maps/api/js?callback=initMap" async defer></script>
</body>
</html>
