<?php
use controllers\UserController;

$userController = new UserController();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['create'])) {
    $userId = $_POST['userId'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $adresse = $_POST['adresse'];
    $civilite = $_POST['civilite'];
    $adresseMail = $_POST['adresseMail'];
    $tel = $_POST['tel'];
    $dateNAissance = $_POST['dateNAissance'];
    $mdp = $_POST['mdp'];
    $dateInscription = $_POST['dateInscription'];
    
    $userController->ajouterUser($userId, $nom, $prenom, $adresse, $civilite, $adresseMail, $tel, $dateNAissance, $mdp, $dateInscription);
}

// Add logic for other CRUD operations

// Redirect or display data after CRUD operations
header("Location: /public/index.php");
exit();

