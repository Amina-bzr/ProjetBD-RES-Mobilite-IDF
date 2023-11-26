<?php
namespace controllers;


class UserController
{

    public function login($adresseMail, $mdp, $bdd)
    {
        $user = $bdd->prepare("SELECT * FROM utilisateur WHERE adressemail = ?");
        $user->execute(array($adresseMail));


        if ($user->rowCount() == 1) {

            $UserData = $user->fetch();

            if ($mdp = $UserData['mdp']) {
                session_set_cookie_params([
                    'secure' => true,  
                    'httponly' => true, 
                    'samesite' => 'Strict', 
                ]);
                // Ouverture de la session
                session_start();

                // Stockage des données de l'utilisateur dans la session
                $_SESSION['userid'] = $UserData['userid'];
                $_SESSION['nom'] = $UserData['nom'];
                $_SESSION['prenom'] = $UserData['prenom'];
                $_SESSION['adresse'] = $UserData['adresse'];
                $_SESSION['civilite'] = $UserData['civilite'];
                $_SESSION['adressemail'] = $UserData['adressemail'];
                $_SESSION['tel'] = $UserData['tel'];
                $_SESSION['datenaissance'] = $UserData['datenaissance'];
                $_SESSION['dateinscription'] = $UserData['dateinscription'];

                return $userData;
            } else {
                // mdp incorrecte
                throw new Exception("Mot de passe incorrect");
            }
        } else {
            // Pas d'utilisateur avec l'email fourni
            throw new Exception("Aucun User ne correspond à l'email fourni");
        }
    }
    public function modifierTel($userid, $tel, $bdd)
    {
        $user = $bdd->prepare("UPDATE utilisateur SET tel = ? WHERE userid = ?");
        $user->execute(array($tel, $userid));
        
        if ($user->rowCount() == 1){
            $user = $bdd->prepare("SELECT * FROM utilisateur WHERE userid = ?");
            $user->execute(array($userid));
            $userData = $user->fetch();
            $_SESSION['tel'] = $userData['tel'];
            return $userData;}
        else
            throw new Exception("Aucun utilisateur ne correspond à l'id fourni");
    }


}
?>
