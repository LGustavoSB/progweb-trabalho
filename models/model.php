<?php

class Model{
    public $conn;

    public function __construct(){
        $servername = "localhost";
        $username = "root";
        $password = "adcuW75J9c";
        $conn = new mysqli($servername, $username, $password);
        $this->conn = $conn;
    }

    function get_conn() {
        return $this->conn;
    }
}
