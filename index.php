<!doctype html>
<html>
<head>
<title>Bienvenue chez Minibu !</title>
<meta charset="utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

<meta name="keywords" content="Minibu,coiffeur,coiffure,hommes,sans,rendez-vous,Châtelet,Chatelet,place,saint-roch,"/>
<meta name="description" content="Chez Minibu, coiffure hommes - 000 Place Saint-Roch 000 Châtelet" />

<?php
  require('header.php')
?>

</head>
<body lang="fr">
<!-- TODO : boilerplate ? no-js -->

<?php
  /*static data*/

  /*TOUTES les variables doivent être déclarées et initialisées ici !*/
  $adresse = "Place Saint-Rock 9, 6200 Châtelet";
  $tel = "071 17 75 55";
  $horaires = array("Lundi"=>"8h - 19h","Mardi"=>"bite","Mercredi"=>"bite","Jeudi"=>"bite","Vendredi"=>"bite","Weekend"=>"bite");
  $tarifs = array("Type de coupe"=>"Prix");
  
  $test = True;
  $last_update = 10000;
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
