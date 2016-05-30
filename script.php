<?php

//debug options
error_reporting(E_ALL);
ini_set("display_errors", 1 );

/*TOUTES les variables doivent être déclarées et initialisées ici !*/

$adresse = "Place Saint Roch 9, 6200 Châtelet";

$adresse_no = "";
$adresse_rue = "";
$adresse_ville = "";
$adresse_code_postal = "";

$horaires  = "Ouvert du mardi au samedi de 9h à 12h et de 13h à 18h.<br>";
$horaires .= "Le jeudi uniquement sur rendez-vous.";

$tarifs = array("Type de coupe"=>"Prix");

$test = TRUE;

$message_clients = "";

//section contact
$tel = "071 17 75 55";
$gsm = "";

// FONCTIONS

function mbu_clients () {
	echo "Nombre de clients : ?";
}
function mbu_message_clients () {
	echo $message_clients;
}
function mbu_adresse () {
	echo $adresse;
}
function mbu_horaires () {
	echo $horaires;
}

?>