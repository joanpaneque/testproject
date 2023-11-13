<?php

    function ctrlValidateRegistrationData($request, $response, $container) {
        $name = $request->get(INPUT_GET, "name");
        $surnames = $request->get(INPUT_GET, "surnames");
        $birthdate = $request->get(INPUT_GET, "birthdate");
        $street = $request->get(INPUT_GET, "street");
        $number = $request->get(INPUT_GET, "number");
        $city = $request->get(INPUT_GET, "city");
        $postalCode = $request->get(INPUT_GET, "postal_code");
        $payment = $request->get(INPUT_GET, "payment");

        $registration = $container->registration();
        $valid = $registration->validate($name, $surnames, $birthdate, $street, $number, $city, $postalCode, $payment);

        $response->set("valid", $valid);

        $response->setJson();
    }