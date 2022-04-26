<?php

include_once 'Usuario.php';

class Funcionario extends Usuario
{
    function __construct($umCpf, $umNome, $umEmail, $umaSenha, $umaDataNasc, $umTelefone)
    {
        parent::__construct($umCpf, $umNome, $umEmail, $umaSenha, $umaDataNasc, $umTelefone, 'F');
    }

}

?>
