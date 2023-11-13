<?php

/**
 * Exemple per a M07.
 *
 * @author: Dani Prados dprados@cendrassos.net
 *
 * Classe contenidor,  té la responsabilitat d'instaciar els models i altres objectes.
 **/

namespace Emeset;

/**
 * Container: Classe contenidor.
 *
 * @author: Dani Prados dprados@cendrassos.net
 *
 * Classe contenidor, la responsabilitat d'instaciar els models i altres objectes.
 **/
class Container
{
    public $config = [];
    public $sql;

    /**
     * __construct:  Crear contenidor
     *
     * @param $config array paràmetres de configuració de l'aplicació.
     **/
    public function __construct($config) {
        $this->config = $config;

        // Instantiation of the connection to the database
        // Doing this in the container allows us to use the same connection in all the models so
        // we avoid creating a new connection in each model saturating the server.
        $conn = new \Daw\Connection($config);
        $this->sql = $conn->getConnection();
    }

    public function response() {
        return new \Emeset\Response();
    }

    public function request() {
        return new \Emeset\Request();
    }

    public function registration() {
        return new \Daw\Registration($this->sql);
    }

    public function identification() {
        return new \Daw\Identification($this->config);
    }
}