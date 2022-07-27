# Mise en place de Doctrine

## 1. Installation des dépendances

```
composer require doctrine/orm 
composer require symfony/cache 
composer require doctrine/annotations
```

## 2. Configuration de Doctrine

```php
<?php
// bootstrap.php

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

require_once "vendor/autoload.php";

$conn = [
    'url' => 'mysql://root:@localhost:3306/doctolib'
];

$config = ORMSetup::createAnnotationMetadataConfiguration(array(__DIR__."/src"), true);
$entityManager = EntityManager::create($conn, $config);
```

## 3. Interfacage de Doctrine avec le terminal

```php
<?php
// cli-config.php
use Doctrine\ORM\Tools\Console\ConsoleRunner;

require_once 'bootstrap.php';

return ConsoleRunner::createHelperSet($entityManager);
```

## 4. Mise à jour du schéma de la base de données

```
php vendor/bin/doctrine orm:schema-tool:update --force --dump-sql
```