<?php

require_once "model.php"

class Login{
    public function __construct() {
        $model = new Model();
        $conn = $model->get_conn();
    }

    public function verifica_usuario($usuario,$senha){

    }

    public function cadastra_usuario($nome,$email,$tipo_usuario){
        
    }
}