<?php

namespace Daw;

class Registration {
    private $sql;

    public function __construct($sql) {
        $this->sql = $sql;
    }

    public function validate($name, $surnames, $birthdate, $street, $number, $city, $postalCode, $payment) {
        // Check if the combination of name and surnames already exists
        $query = "SELECT * FROM registrations WHERE name = :name AND surnames = :surnames";
        $stmt = $this->sql->prepare($query);
        // Bind values
        $stmt->bindValue(":name", $name);
        $stmt->bindValue(":surnames", $surnames);
        // Execute
        $stmt->execute();
        
        // If there is a result, return false
        if ($stmt->rowCount() > 0) {
            return ["valid" => false, "message" => "Ja existeix una inscripció amb aquest nom i cognoms"];
        }
        // Check if the name is empty
        if (empty($name)) {
            return ["valid" => false, "message" => "El nom no pot estar buit"];
        }
        // Check if the surnames are empty
        if (empty($surnames)) {
            return ["valid" => false, "message" => "Els cognoms no poden estar buits"];
        }
        // Check if the birthdate is empty
        if (empty($birthdate)) {
            return ["valid" => false, "message" => "La data de naixement no pot estar buida"];
        }
        // Check if the street is empty
        if (empty($street)) {
            return ["valid" => false, "message" => "El carrer no pot estar buit"];
        }
        // Check if the number is empty
        if (empty($number)) {
            return ["valid" => false, "message" => "El número no pot estar buit"];
        }
        // Check if the city is empty
        if (empty($city)) {
            return ["valid" => false, "message" => "La ciutat no pot estar buida"];
        }
        // Check if the postal code is empty
        if (empty($postalCode)) {
            return ["valid" => false, "message" => "El codi postal no pot estar buit"];
        }

        // Check if the payment is empty
        if ($payment == null) {
            return ["valid" => false, "message" => "El resguard del pagament no pot estar buit" . $payment];
        }

        return ["valid" => true, "message" => "Inscripció vàlida"];

    }

    public function register($name, $surnames, $birthdate, $street, $number, $city, $postalCode, $payment) {
        // Prepare the query
        $query = "INSERT INTO registrations (name, surnames, birthdate, street, number, city, postal_code) VALUES (:name, :surnames, :birthdate, :street, :number, :city, :postal_code)";
        $stmt = $this->sql->prepare($query);
        // Bind values
        $stmt->bindValue(":name", $name);
        $stmt->bindValue(":surnames", $surnames);
        $stmt->bindValue(":birthdate", $birthdate);
        $stmt->bindValue(":street", $street);
        $stmt->bindValue(":number", $number);
        $stmt->bindValue(":city", $city);
        $stmt->bindValue(":postal_code", $postalCode);
        // Execute
        $stmt->execute();

        // Move the file payment to ../data
        $paymentName = $payment["name"];

        $paymentPath = "../data/" . $name."-".$surnames."-".$paymentName;
        move_uploaded_file($payment["tmp_name"], $paymentPath);
    }

    public function getRegistrations() {
        // Prepare the query
        $query = "SELECT * FROM registrations";
        $stmt = $this->sql->prepare($query);
        // Execute
        $stmt->execute();
        // Return the result
        return $stmt->fetchAll();
    }
}