<?php
    function ctrlInscriptions($request, $response, $container) {
        
        $registration = $container->registration();
        $inscriptions = $registration->getRegistrations();

        $response->set("inscriptions", $inscriptions);

        $response->setTemplate("inscriptions.php");
        return $response;
    }