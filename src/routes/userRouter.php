<?php
require '../../vendor/autoload.php';
use controllers\UserController;

$userController = new UserController();
require_once'../model/ConnectBD.php';

        
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['tel'])) {
	session_start();
        $tel = $_POST['tel'];
        $userController->modifierTel($_SESSION['userid'], $tel,$bdd);	
        header("Location: /src/view/profile.php");
        exit();

    } elseif (isset($_POST['adresseMail']) && isset($_POST['mdp'])) {

        $adressemail = $_POST['adresseMail'];
        $mdp = $_POST['mdp'];
        $userData = $userController->login($adressemail, $mdp, $bdd);
	header("Location: /src/view/profile.php");
        exit(); 

        
    }
}

?>
