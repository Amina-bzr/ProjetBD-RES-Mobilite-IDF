<?php

       $config = require_once(__DIR__ . '/../../database.php');

	try {
		$bdd = new PDO("pgsql:host={$config['host']};dbname={$config['dbname']}", $config['user'], $config['password']);
		}
	catch (PDOException $e) {
		echo "Error : " . $e->getMessage() . "<br/>";
		die();
		}

?>
