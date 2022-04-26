<?php

include_once '../Back-end/Model/Usuario.php';
require_once ('../Back-end/Model/Usuario.php');

    public class TesteUsuario extends PHPUnit\Framework\TestCase {

        public function testeGetCpf() {

            $obj = new Usuario("12345678910", "Vitor Melo", "vitor_m@gmail.com","vitor123","04122001","37998344464","F");
            $this->assertEquals("12345678910", $obj->getCpf());
        }
    }

?>