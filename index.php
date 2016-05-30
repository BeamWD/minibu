<!doctype html>
<html>
<head>
<title>Bienvenue chez Minibu !</title>
<meta charset="utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

<meta name="keywords" content="Minibu,coiffeur,coiffure,hommes,sans,rendez-vous,Châtelet,Chatelet,place,saint-roch,"/>
<meta name="description" content="Chez Minibu, Coiffeur hommes - Barbier. 9 Place Saint-Roch, Châtelet." />

<!-- css, favicons, google fonts, etc. -->
<?php require_once('head.php') ?>

<!-- all the scripting stuff -->
<?php require_once('script.php') ?>

</head>
<body lang="fr">
<!-- TODO : boilerplate if no js -->

<div id="page">
  <div id="header">
    <!-- Cliquer/toucher pour revenir au haut de la page -->
    <span class="btn">
      <a href="#page">Logo</a>
    </span>

    <!-- Cliquer/toucher pour aller au formulaire de contact -->
    <span class="btn">
      <a href="#contact">Mail</a>
    </span>
  </div>

  <div id="main" role="main">
    <div id="logo">
      <img src="img/all.png" alt="Logo Minibu" />
    </div>
    
    <h1>Bienvenue chez Minibu !</h1>
    <b>
      <!-- nombre de clients actuel (ajax + php -->
      <?php mbu_clients(); ?>
    </b>
    
    <div id="message">
      <!-- Message personnalisé. -->
      <?php mbu_message_clients(); ?>
    </div>
    
    <div id="horaires">
      <h2>Horaire</h2>
      <?php mbu_horaires(); ?>
    </div>

    <div id="plan">
      <p> <b>Adresse</b> : <?php mbu_adresse(); ?> </p>
      <div id="map"></div>
    </div>
    
    <div id="tarifs">
      <h2>Tarifs</h2>
    </div>

    <div id="contact">
      <h2>Contact</h2>
      <form>
        Sujet :
        <br />
        <input type="text" name="mail_sujet" value="Sujet"/>
        <input type="submit" value="Envoyer"/>
      </form>
    </div>
    
    <!-- Photo de l'extérieur du bâtiment ? -->
    <!--
    <div id="facebook">
      Lien Facebook ?
    </div>
    -->
  </div>


  <div id="footer" role="footer">
    <span id="test_js">
      <b id="" style='color:red'>Bug js</b>
    </span>

    <span id="test_php">
      <?php
        if ($test == TRUE) {
          echo "<b style='color:green'>PHP ok !</b>";
        }
        else {
          echo "<b style='color:red'>Bug PHP !</b>";
        }
      ?>
    </span>
  </div>
  
</div>
<script>
"use strict";

function initMap() {
  //pour Google Map
  var mapDiv = document.getElementById('map');
  var map = new google.maps.Map(mapDiv, {
    center: {lat: 50.4003835, lng: 4.5293986},
    zoom: 15
  });
}

(function () {
  //test
  document.getElementById("test_js").innerHTML = "<b style='color:green'>Js ok, </b>";
})();

</script>
<script src="https://maps.googleapis.com/maps/api/js?callback=initMap" async defer>
</script>
</body>
</html>
