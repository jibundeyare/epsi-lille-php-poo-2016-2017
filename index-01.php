<?php

// chargement de la classe « à la main » avec require()
require('Article.php');

$titre = 'Lorem ipsum';
$contenu = 'Lorem ipsum lorem ipsum lorem ipsum';
$date = new DateTime();

$a = new Article($titre, $contenu, $date);

echo $a->getTitre() . "<br />\n";
echo $a->getContenu() . "<br />\n";

// afficher la date (méthode 1)
echo $a->getDate()->format('d/m/Y H:i:s') . "<br />\n";

// afficher la date (méthode alternative 2)
$d = $a->getDate();
echo $d->format('d/m/Y H:i:s') . "<br />\n";
