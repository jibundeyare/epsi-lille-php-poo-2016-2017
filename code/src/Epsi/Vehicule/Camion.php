<?php

namespace Epsi\Vehicule;

// la classe Camion étend la classe Vehicule
// la classe Camion implémente les interfaces VitesseMaxable, QuiSuisJeable et VehiculeAutomobile
class Camion extends Vehicule implements VitesseMaxable, QuiSuisJeable, VehiculeAutomobile
{
	// la classe Camion utilise le trait VitesseMaxableTrait
	use VitesseMaxableTrait;

	// les paramètres $passagers, $roues et $vitesseMax sont optionnels
	public function __construct($passagers = 2, $roues = 8, $vitesseMax = 140)
	{
		// appel du constructeur de la classe parent
		parent::__construct($passagers, $roues);

		$this->vitesseMax = $vitesseMax;
	}

	// surcharge de la méthode quiSuisJe() de la classe parent
	public function quiSuisJe()
	{
		return 'je suis un camion';
	}
}
