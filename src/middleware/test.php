<?php
    function middleTest($request, $response, $container, $next) {
        if (1 === 1) {
            $next($request, $response, $container);
            return $response;
        }
        $response->redirect("location: index.php");

        return $response;
    }