<?php

require_once 'src/Entity/Fournisseur.php';
require_once 'src/Entity/Produit.php';
require_once 'src/Entity/Rayon.php';

require_once 'bootstrap.php';

$repo = $entityManager->getRepository('Fournisseur');
$fournisseur = $repo->find(5);
$entityManager->remove($fournisseur);
$entityManager->flush();