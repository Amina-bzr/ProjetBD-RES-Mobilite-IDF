<?php
namespace controllers;


class PasseController
{ 
    public function getPasses($clientid, $bdd)
    {
        $passes = $bdd->prepare("SELECT * FROM passe WHERE clientId= ?");
        $passes->execute(array($clientid));
        if ($passes->rowCount() >= 1) {
            $passesData = $passes->fetchAll(); 
            return $passesData;
            }
}}
?>
