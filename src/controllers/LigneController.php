<?php
namespace controllers;


class LigneController
{

    
    public function getLignes($bdd)
    {
        $lignes = $bdd->query("SELECT * FROM ligne ORDER BY typeligne");

        if ($lignes->rowCount() >= 1) {
            $lignesData = $lignes->fetchAll(); 
            return $lignesData;}
           
        


}}
?>
