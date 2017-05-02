<?php

namespace Epsi\Vehicule;

// la classe Voiture étend la classe Vehicule
// la classe Voiture implémente les interfaces VitesseMaxable, QuiSuisJeable et VehiculeAutomobile
class Voiture extends Vehicule implements VitesseMaxable, QuiSuisJeable, VehiculeAutomobile
{
	// la classe Voiture utilise le trait VitesseMaxableTrait
	use VitesseMaxableTrait;

	// le paramètre $passagers est obligatoire
	// les paramètres $roues et $vitesseMax sont optionnels
	public function __construct($passagers, $roues = 4, $vitesseMax = 260)
	{
		// appel du constructeur de la classe parent
		parent::__construct($passagers, $roues);

		$this->vitesseMax = $vitesseMax;
	}

	// surcharge de la méthode quiSuisJe() de la classe parent
	public function quiSuisJe()
	{
		return 'je suis une voiture';
	}
}
