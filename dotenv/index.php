<?php 

require_once 'vendor/autoload.php';

$repository = Dotenv\Repository\RepositoryBuilder::createWithNoAdapters()
   ->addAdapter(Dotenv\Repository\Adapter\EnvConstAdapter::class)
   ->addWriter(Dotenv\Repository\Adapter\PutenvAdapter::class)
   ->immutable()
   ->make();

$dotenv = Dotenv\Dotenv::create($repository, __DIR__);
$dotenv->load();

$app = $_ENV;

echo '<pre>';
print_r($app);
echo '</pre>';