<?php
namespace controllers;

use model\ConnectBD;

class UserController {
    public function ajouterUser($userId, $nom, $prenom, $adresse, $civilite, $adresseMail, $tel, $dateNAissance, $mdp, $dateInscription) {
        $pdo = ConnectBD::connect();
        $stmt = $pdo->prepare("INSERT INTO utilisateur (userId, nom, prenom, adresse, civilite, adresseMail, tel, dateNAissance, mdp, dateInscription) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute([$userId, $nom, $prenom, $adresse, $civilite, $adresseMail, $tel, $dateNAissance, $mdp, $dateInscription]);
    }

    
}

