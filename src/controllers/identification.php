<?php

    function ctrlIdentification($request, $response, $container) {
        $key = $request->get(INPUT_GET, "key");

        $response->setTemplate("identification.php");

        return $response;
    }