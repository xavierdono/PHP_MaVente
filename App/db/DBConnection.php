<?php

namespace App\DB;

class DBConnection {

    private $base;

    public function __construct() {
        $this->base = new \SQLite3(ROOT . 'db_vente.db');
    }

    public function exec($query) {
        return $this->base->exec($query);
    }

    public function query($query) {
        return $this->base->query($query);
    }

    public function close() {
        $this->base->close();
    }
}
