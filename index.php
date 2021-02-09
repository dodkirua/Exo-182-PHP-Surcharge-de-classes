<?php

// J'inclue mes deux classes ici, faites bien attention à l'ordre d'inclusion, comme la classe dragon hérite de la classe
// personnage, je dois inclure la classe personnage avant d'inclure la classe dragon
// TODO attention, certaines erreurs volontaires ont pu être glissées, a vous de vérifier ! Ce message en lui même est peut être un piège :-)
require "classes/Personnage.php";
require "classes/Dragon.php";
require "classes/Princesse.php";
require "classes/Sorcier.php";

// Creation d'une instance de la classe personnage
$humain = new Personnage();
$humain->setNom("Pierre-Yves");
echo "Le personage : ".$humain."<br>";


// Creation d'une instance de la classe dragon
$dragon = new Dragon();
$dragon->setNom("");
echo "Le dragon : ".$dragon."<br>";

// Creation  d'une instance de la classe princesse
$princesse = new Princesse();
$princesse->setNom("Zelda");
echo "La princesse : ".$princesse."<br>";

// Creation  d'une instance de la classe sorcier
$sorcier = new Sorcier();
$sorcier->setNom("Harry");
echo "Le sorcier : ".$sorcier."<br>";