<?php

// chargement de la classe automatique avec l'autoload de composer
require('vendor/autoload.php');

// déclaration des classes, interfaces ou traits utilisés
use Epsi\Vehicule\Camion;
use Epsi\Vehicule\QuiSuisJeable;
use Epsi\Vehicule\VehiculeAutomobile;
use Epsi\Vehicule\VitesseMaxable;
use Epsi\Vehicule\Voiture;

// instanciation avec passage d'une valeur en paramètre
$v = new Voiture(4);

echo $v->quiSuisJe() . "<br />\n";
echo $v->getPassagers() . "<br />\n";
echo $v->getRoues() . "<br />\n";
echo $v->getVitesseMax() . "<br />\n";

echo "<br />\n";

// instanciation avec les valeurs par défaut
$c = new Camion();
echo $c->quiSuisJe() . "<br />\n";
echo $c->getPassagers() . "<br />\n";
echo $c->getRoues() . "<br />\n";
echo $c->getVitesseMax() . "<br />\n";

// fonction avec type hinting, attention à l'absence du \ backslash
function echoQuiSuisJe(QuiSuisJeable $q) {
	echo $q->quiSuisJe() . "<br />\n";
}

// fonction avec type hinting, attention à l'absence du \ backslash
function echoVitesseMax(VitesseMaxable $v) {
	echo $v->getVitesseMax() . "<br />\n";
}

// fonction avec type hinting, attention à l'absence du \ backslash
function echoVehiculeAutomobile(VehiculeAutomobile $c) {
	// l'objet $c est polymorphique
	echoQuiSuisJe($c);
	echoVitesseMax($c);
}

echoQuiSuisJe($v);
echoQuiSuisJe($c);

echoVitesseMax($v);
echoVitesseMax($c);

echoVehiculeAutomobile($v);
echoVehiculeAutomobile($c);
