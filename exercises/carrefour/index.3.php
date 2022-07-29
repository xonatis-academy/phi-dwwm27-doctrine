<?php

require_once 'src/Entity/Fournisseur.php';
require_once 'src/Entity/Produit.php';
require_once 'src/Entity/Rayon.php';

require_once 'bootstrap.php';

$repo = $entityManager->getRepository('Fournisseur');
$fournisseur = $repo->find(4);
foreach ($fournisseur->getProduits() as $produit) {
    echo 'Produit que je vends : ' . $produit->getId() . ': ' . $produit->getNom();
}