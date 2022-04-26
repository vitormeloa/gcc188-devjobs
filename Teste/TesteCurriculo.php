<?php

    include_once '../Back-end/Model/Curriculo.php';
    require_once ('../Back-end/Model/Curriculo.php');


    class TesteCurriculo extends PHPUnit\Framework\TestCase {

        public function getTesteCidadeOrigem() {
            $obj = new Curriculo("Formiga","MG","vitormeloa","vitor-melo-a","Dev Front end", "CC na UFLA", "Dev na CPQD", "Especialista em React","12345678910","Front-end");
            $this->assertEquals("Formiga",$obj->getCidadeOrigem());
        }
    }
?>
