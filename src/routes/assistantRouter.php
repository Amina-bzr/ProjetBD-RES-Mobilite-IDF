<?php
require '../../vendor/autoload.php';
use controllers\AssistantController;
require_once '../utils/ConvertirSringEnArray.php';
$assistantController = new AssistantController();
require_once'../model/ConnectBD.php';
        
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    	$assistantsData=$assistantController->getAssistants($bdd);
        if (!empty($assistantsData)){
            foreach ($assistantsData as $assistant) {
            	echo '<div class="carte">';
            	echo '<h2>' . $assistant['prenom'] . ' ' . $assistant['nom'] . '</h2>';
            	echo '<p><strong>Email:</strong> ' . $assistant['adressemail'] . '</p>';
            	echo '<p><strong>Telephone: </strong>' . $assistant['tel'] . '</p>';
            
            	echo '<div class="services-container">';
            	$services = ConvertirSringEnArray($assistant['services']);
            	foreach ($services as $service) {
                  echo '<div class="service-container">' . $service . '</div>';
            	}
            	echo '</div>';
            
            	echo '<p>' . $assistant['description'] . '</p>';
            	echo '<button type="submit" class="service-container" style="width:50%;margin-left:25%;cursor:pointer;"> Contacter </button>';
            	echo '</div>';
        } }
        else {
            echo'<h4>Aucun assistant pour le momment..</h4>'; }
        
}

?>
