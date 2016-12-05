<?php

namespace Epsi\CMS;

class Categorie
{
	protected $collection;

	public function __construct()
	{
		// initialisation d'un tableau vide
		$this->collection = array();
	}

	public function getCollection()
	{
		return $this->collection;
	}

	public function setCollection(array $collection)
	{
		$this->collection = $collection;

		return $this;
	}

	// méthode avec type hinting, attention à l'absence du \ backslash
	public function addItem(Article $item)
	{
		// ajout d'un objet de la classe Article au tableau
		$this->collection[] = $item;
	}

	// méthode avec type hinting, attention à l'absence du \ backslash
	public function removeItem(Article $item)
	{
		// on vérifie si l'objet $item de la classe Article passé en paramètre existe dans le tableau
		foreach ($this->collection as $key => $value) {
			// l'objet $item existe dans le tableau
			if ($item === $value) {
				// suppression de l'objet du tableau
				array_splice($this->collection, $key, 1);
			}
		}
	}
}
