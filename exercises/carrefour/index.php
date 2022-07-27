<?php

require_once 'src/Entity/Fournisseur.php';
require_once 'src/Entity/Produit.php';
require_once 'src/Entity/Rayon.php';

require_once 'bootstrap.php';

$tomate = new Rayon();
$tomate->setNom('Rayon pour tomatos');

$coeur = new Produit();
$coeur->setNom('Tomate coeur');
$coeur->setPrice(10.6);
$coeur->setRayon($tomate);

$leo = new Fournisseur();
$leo->setNom('Monsieur Four Nisseur');
$leo->addProduit($coeur);

$entityManager->persist($tomate);
$entityManager->persist($coeur);
$entityManager->persist($leo);

$entityManager->flush();