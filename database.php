<?php
require_once __DIR__ . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

return [
    'host' => $_ENV['PGHOST'],
    'dbname' => $_ENV['PGDATABASE'],
    'user' => $_ENV['PGUSER'],
    'password' => $_ENV['PGPASSWORD']
];

