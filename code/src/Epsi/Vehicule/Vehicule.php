<?php

namespace Epsi\Vehicule;

abstract class Vehicule
{
	protected $passagers;
	protected $roues;
	protected $moteurDemarre;

	// les paramètres $passagers et $roues sont optionnels
	public function __construct($passagers = 4, $roues = 4)
	{
		$this->passagers = $passagers;
		$this->roues = $roues;
		$this->moteurDemarre = false;
	}

	public function getPassagers()
	{
		return $this->passagers;
	}

	public function setPassagers($passagers)
	{
		$this->passagers = $passagers;

		return $this;
	}

	public function getRoues()
	{
		return $this->roues;
	}

	public function setRoues($roues)
	{
		$this->roues = $roues;

		return $this;
	}

	public function isMoteurDemarre()
	{
		return $this->moteurDemarre;
	}

	public function setMoteurDemarre($moteurDemarre)
	{
		$this->moteurDemarre = (bool) $moteurDemarre;

		return $this;
	}

	// la méthode abstraite quiSuisJe() doit être implémentée par la classe enfant
	abstract public function quiSuisJe();
}
