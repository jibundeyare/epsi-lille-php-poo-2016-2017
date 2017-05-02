<?php

namespace Epsi\CMS;

class Article
{
	protected $titre;
	protected $contenu;
	protected $date;

	// méthode avec type hinting, attention au \ backslash
	public function __construct($titre, $contenu, \DateTime $date)
	{
		$this->titre = $titre;
		$this->contenu = $contenu;
		$this->date = $date;
	}

	// destructeur (optionnel)
	public function __destruct()
	{
	}

	public function getTitre()
	{
		return $this->titre;
	}

	public function setTitre($titre)
	{
		$this->titre = $titre;

		return $this;
	}

	public function getContenu()
	{
		return $this->contenu;
	}

	public function setContenu($contenu)
	{
		$this->contenu = $contenu;

		return $this;
	}

	public function getDate()
	{
		return $this->date;
	}

	// méthode avec type hinting, attention au \ backslash
	public function setDate(\DateTime $date)
	{
		$this->date = $date;

		return $this;
	}
}
