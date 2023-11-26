<?php
require '../../vendor/autoload.php';
use controllers\LigneController;

$ligneController = new LigneController();
require_once'../model/ConnectBD.php';
        
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  	$lignesData=$ligneController->getLignes($bdd);
        if (!empty($lignesData)){
        	$type='';            
        	foreach ($lignesData as $ligne) {
            	 	if ($ligne['typeligne']!=$type){
            	 		echo'</div><div class="lignes-container" style="margin-top:50px">';
            	 		$type=$ligne['typeligne'];
            	 		echo'<h1>'.$type.'</h1>';}
            	 	echo '<div class="ligne-square"> <p style="font-size:3em;">' . $ligne['nomligne'] . '</p></div>';
        	}
        	echo'</div>';}
        else {
            echo'<p>Aucune souscription pour le momment..</p>'; }
    }
        
       

?>
