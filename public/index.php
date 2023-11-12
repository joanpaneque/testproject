<?php

    // Configuration
    include "../src/config.php";

    // Functions

    // Middleware
    include "../src/middleware/test.php";

    // Models
    include "../src/models/connection.php";
    include "../src/models/test.php";

    // Controllers
    include "../src/controllers/index.php";

    // Emeset library
    include "../src/Emeset/Container.php";
    include "../src/Emeset/Request.php";
    include "../src/Emeset/Response.php";

    $request = new \Emeset\Request();
    $response = new \Emeset\Response();
    $container = new \Emeset\Container($config);

    $r = $_REQUEST["r"] ?? "";

    if ($r === "") {
        middleTest($request, $response, $container, "ctrlIndex");
    } else if ($r === "") {

    } else {

    }

    $response->response();