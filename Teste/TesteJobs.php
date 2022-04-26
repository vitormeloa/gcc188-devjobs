<?php

    require_once ('../Back-end/Model/Job.php');
    include_once '../Back-end/Model/Job.php';

    public class TesteJob extends PHPUnit\Framework\TestCase {

            public function testeGetJobNome() {

            $obj = new Job("Dev Front", 5, "Vaga para front end","JavaScript","VT + VA","Sim","12345678910");
            $this->assertEquals("12345678910", $obj->getJobNome());
    }
    }
?>