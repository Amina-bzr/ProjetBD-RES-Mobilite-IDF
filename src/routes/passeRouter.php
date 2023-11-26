<?php

require '../../vendor/autoload.php';
use controllers\PasseController;
$passeController = new PasseController();
require_once'../model/ConnectBD.php';
        
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    	$passesData=$passeController->getPasses($_SESSION['userid'],$bdd);
        if (!empty($passesData)){
            foreach ($passesData as $forfait) {
            echo '<div class="carte">';
            echo '<h2>' . $forfait['nomforfait'] . '</h2>';
            echo '<p><strong>Date de chargement:</strong> ' . $forfait['datechargement'] . '</p>';
            echo '<p><strong>Date de fin de validité:</strong> ' . $forfait['datefinvalidite'] . '</p>';            
            echo '<p><strong>Zones incluses:</strong> de ' . $forfait['zonedebut'] . ' à ' .$forfait['zonefin']. '</p>';
            echo '</div>';
        }
        }
        else {
            echo'<p>Aucune souscription pour le momment..</p>'; }
        
}

?>
