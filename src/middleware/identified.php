<?php
    function middleIdentified($request, $response, $container, $next) {
        $identified = $request->get("SESSION", "identified");
        if (!$identified) {
            $response->redirect("location: ?r=identification");
            return $response;
        }
        $next($request, $response, $container);
    }