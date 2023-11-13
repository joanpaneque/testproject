<?php

    function ctrlValidateLoginKey($request, $response, $container) {
        $key = $request->get(INPUT_GET, "key");

        $identification = $container->identification();
        $valid = $identification->validate($key);

        if ($valid["valid"]) {
            $response->setSession("identified", true);
        }
        $response->set("valid", $valid);
        $response->setJson();
    }