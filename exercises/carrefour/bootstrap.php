<?php
// bootstrap.php

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

require_once "vendor/autoload.php";

$conn = [
    'url' => 'mysql://root:@localhost:3306/carrefour'
];

$config = ORMSetup::createAnnotationMetadataConfiguration(array(__DIR__."/src"), true);
$entityManager = EntityManager::create($conn, $config);