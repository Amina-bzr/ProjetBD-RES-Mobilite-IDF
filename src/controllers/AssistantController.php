<?php
namespace controllers;


class AssistantController
{ 
    public function getAssistants($bdd)
    {
        $assistants = $bdd->query("SELECT * FROM assistantclientele INNER JOIN utilisateur ON utilisateur.userid=assistantclientele.assistantid");
        
        if ($assistants->rowCount() >= 1) {
            $assistantsData = $assistants->fetchAll();
            return $assistantsData;
            }
}}
?>
