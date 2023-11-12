<?php
    function ctrlIndex($request, $response, $container) {

        $data = $container->test()->getAll();

        $response->set("data", $data);

        $response->setTemplate("index.php");
        return $response;
    }