<?php

namespace Epsi\Vehicule;

trait VitesseMaxableTrait
{
	protected $vitesseMax;

	public function getVitesseMax()
	{
		return $this->vitesseMax;
	}

	public function setVitesseMax($vitesseMax)
	{
		$this->vitesseMax = $vitesseMax;

		return $this;
	}
}
