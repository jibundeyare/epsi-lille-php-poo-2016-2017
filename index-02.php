<?php

// chargement de la classe automatique avec l'autoload de composer
require('vendor/autoload.php');

// déclaration des classes utilisées
use Epsi\CMS\Article;
use Epsi\CMS\Categorie;

// instanciation d'un objet de la classe Categorie, attention à l'absence du \ backslash
$c = new Categorie();

// initialisation d'un tableau vide
$collection = array();

// création de 10 articles fictifs
for ($i = 1; $i <= 10; $i++) {
	$titre = 'Lorem ipsum ' . $i;
	$contenu = 'Lorem ipsum lorem ipsum lorem ipsum';
	// instanciation d'un objet de classe DateTime, attention au \ backslash
	$date = new \DateTime();

	// instanciation d'un objet de la classe Article, attention à l'absence du \ backslash
	$a = new Article($titre, $contenu, $date);

	// ajout d'un objet de la classe Article au tableau
	$collection[] = $a;
}

// affectation du tableau à l'objet de la classe Categorie
$c->setCollection($collection);

// affichage du titre de tous les articles de la collection
foreach ($c->getCollection() as $a) {
	echo $a->getTitre() . "<br />\n";
}

// compte du nombre d'article avec count()
echo "nombre d'articles : " . count($c->getCollection()) . "<br />\n";

// suppression du dernier article ajouté
$c->removeItem($a);

// compte du nombre d'article avec count()
echo "nombre d'articles : " . count($c->getCollection()) . "<br />\n";
