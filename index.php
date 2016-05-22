<!doctype html>
<html>
<head>
<title>Bienvenue chez Minibu !</title>
<meta charset="utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

<meta name="keywords" content="Minibu,coiffeur,coiffure,hommes,sans,rendez-vous,Châtelet,Chatelet,place,saint-roch,"/>
<meta name="description" content="Chez Minibu, Coiffeur hommes - Barbier. 9 Place Saint-Roch, Châtelet." />

<?php
  //data

  //debug options
  error_reporting( E_ALL );
  ini_set( "display_errors", 1 );

  /*static data*/

  /*TOUTES les variables doivent être déclarées et initialisées ici !*/
  $adresse = "Place Saint Roch 9, 6200 Châtelet";
  $tel = "071 17 75 55";
  $horaires = array("Lundi"=>"8h - 19h","Mardi"=>"bite","Mercredi"=>"bite","Jeudi"=>"bite","Vendredi"=>"bite","Weekend"=>"bite");
  $horaires_html = "<b>Horaires :</b><br>Ouvert du mardi au samedi de 9h00 à 12h00 et de 13h00 à 18h00.<br>Le jeudi uniquement sur rendez-vous."
  $tarifs = array("Type de coupe"=>"Prix");
  
  $test = TRUE;
  $last_update = 10000;
?>

<?php
  require('header.php')
?>

</head>
<body lang="fr">
<!-- TODO : boilerplate if no js -->

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
      <img src="img/all.png" alt="Logo Minibu" />
    </div>
    
    <h1>Bienvenue chez Minibu !</h1>
    <b>
      Il y a <span id="n_clients">?? (bug)</span> clients pour le moment.
      <br />
      <small>
        Dernière mise à jour il y a <?php echo $last_update ?> minutes
      </small>
    </b>
    
    <div id="message">
      Message personnalisé.
    </div>
    
    <div id="horaires">
      Horaires ici (en php)
    </div>
    
    <div id="tarifs">
      Tarifs ici (en php)
    </div>

    <div id="plan">
      Lien Google Map
      <div id="map"></div>
    </div>
    
    <!-- Photo de l'extérieur du bâtiment ? -->
    <!--
    <div id="facebook">
      Lien Facebook ?
    </div>
    -->
  </div>


  <div id="footer">
    <footer>
      Footer
      <span id="test_js">
        <b id="" style='color:red'>Bug js</b>
      </span>
      <span id="test_php">
        <?php
          if ($test == TRUE) {
            echo "<b style='color:green'>PHP ok!</b>";
          }
          else {
            echo "<b style='color:red'>Bug PHP !</b>";
          }
        ?>
      </span>
    </footer>
  </div>
</div>
<script>
"use strict";

function initMap() {
  var mapDiv = document.getElementById('map');
  var map = new google.maps.Map(mapDiv, {
    center: {lat: 50.4003835, lng: 4.5293986},
    zoom: 15
  });
}

(function () {
  //test
  document.getElementById("test_js").innerHTML = "<b style='color:green'>Test js ok!</b>";
})();

</script>
<script src="https://maps.googleapis.com/maps/api/js?callback=initMap" async defer>
</script>
</body>
</html>
