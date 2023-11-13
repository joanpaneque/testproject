<?php

    // Configuration
    include "../src/config.php";

    // Functions

    // Middleware
    include "../src/middleware/identified.php";

    // Models
    include "../src/models/connection.php";
    include "../src/models/registration.php";
    include "../src/models/identification.php";

    // Controllers
    include "../src/controllers/index.php";
    include "../src/controllers/validateRegistrationData.php";
    include "../src/controllers/registration.php";
    include "../src/controllers/validateLoginKey.php";
    include "../src/controllers/identification.php";
    include "../src/controllers/inscriptions.php";
    include "../src/controllers/invalidateLoginKey.php";
    include "../src/controllers/acceptCookies.php";

    // Emeset library
    include "../src/Emeset/Container.php";
    include "../src/Emeset/Request.php";
    include "../src/Emeset/Response.php";

    $request = new \Emeset\Request();
    $response = new \Emeset\Response();
    $container = new \Emeset\Container($config);

    $response->set("identified", $request->get("SESSION", "identified"));

    $r = $_REQUEST["r"] ?? "";

    if ($r === "") {
        ctrlIndex($request, $response, $container);
    } else if ($r === "validateRegistrationData") {
        ctrlValidateRegistrationData($request, $response, $container);
    } else if ($r === "registration") {
        ctrlRegistration($request, $response, $container);
    } else if ($r === "identification") {
        ctrlIdentification($request, $response, $container);
    } else if ($r === "validateLoginKey") {
        ctrlValidateLoginKey($request, $response, $container);
    } else if ($r === "inscriptions") {
        middleIdentified($request, $response, $container, "ctrlInscriptions");
    } else if ($r === "invalidateLoginKey") {
        ctrlInvalidateLoginKey($request, $response, $container);
    } else if ($r === "acceptCookies") {
        ctrlAcceptCookies($request, $response, $container);
    } else {
        ctrlIndex($request, $response, $container);
    }
    
    $response->response();