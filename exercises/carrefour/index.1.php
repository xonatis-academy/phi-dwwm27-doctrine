<?php

require_once 'src/Entity/Fournisseur.php';
require_once 'src/Entity/Produit.php';
require_once 'src/Entity/Rayon.php';

require_once 'bootstrap.php';

$produit = new Produit();
$produit->setNom('Chocolat');
$produit->setPrice(10.5);

$fournisseur = new Fournisseur();
$fournisseur->setNom('Monsieur Four Nisseur');

$rayon = new Rayon();
$rayon->setNom('Confiserie');

$fournisseur->addProduit($produit);
$produit->setRayon($rayon);

$entityManager->persist($produit);
$entityManager->persist($fournisseur);
$entityManager->persist($rayon);

$entityManager->flush();