<?php
namespace model;

use PDO;

class ConnectBD {
    public static function connect() {
        $config = require_once(__DIR__ . '/../../config/database.php');

        $dsn = "postgresql://{$config['user']}@{$config['host']}/{$config['dbname']}?sslmode=require";

        try {
            return new PDO($dsn);
        } catch (PDOException $e) {
            die("Connection non etablie avec le serveur bd: " . $e->getMessage());
        }
    }
}
