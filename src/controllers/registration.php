<?php

    function ctrlRegistration($request, $response, $container) {


        $name = $request->get(INPUT_POST, "name");
        $surnames = $request->get(INPUT_POST, "surnames");
        $birthdate = $request->get(INPUT_POST, "birthdate");
        $street = $request->get(INPUT_POST, "street");
        $number = $request->get(INPUT_POST, "number");
        $city = $request->get(INPUT_POST, "city");
        $postalCode = $request->get(INPUT_POST, "postal_code");

        $payment = "";
        
        if (isset($_FILES["payment"])) {
            $payment = $_FILES["payment"];
        }



        $data = [
            "Nom" => $name,
            "Cognoms" => $surnames,
            "Data de naixement" => $birthdate,
            "Carrer" => $street,
            "Número" => $number,
            "Ciutat" => $city,
            "Codi postal" => $postalCode
        ];

        $registration = $container->registration();
        $valid = $registration->validate($name, $surnames, $birthdate, $street, $number, $city, $postalCode, $payment);

        if ($valid["valid"]) {
            $registration->register($name, $surnames, $birthdate, $street, $number, $city, $postalCode, $payment);
        }

        $response->set("data", $data);
        $response->set("valid", $valid);
        $response->setTemplate("registration.php");
        return $response;
    }