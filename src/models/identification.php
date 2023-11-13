<?php

namespace Daw;

class Identification {
    private $config;

    public function __construct($config) {
        $this->config = $config;
    }

    public function validate($key) {
        if ($key == $this->config["identification"]["key"]) {
            return ["valid" => true, "message" => "Clau vàlida"];
        } else {
            return ["valid" => false, "message" => "Clau no vàlida"];
        }
    }
}