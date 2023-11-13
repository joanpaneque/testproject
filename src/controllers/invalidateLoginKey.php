<?php

    function ctrlInvalidateLoginKey($request, $response, $container) {

        $response->setSession("identified", null);
        $response->redirect("location: ?r=index");

        return $response;
    }