<?php

namespace Daw;

class Test {
    private $sql;

    public function __construct($sql) {
        $this->sql = $sql;
    }

    public function getAll() {
        $query = $this->sql->prepare("SELECT * FROM testproject");
        $query->execute();
        return $query->fetchAll();
    }
}