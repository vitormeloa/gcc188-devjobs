<?php

class UsuarioDAO
{
    function __construct(){}

    function consultarCPF($cpf, $connection)
    {
        $consultarUsuario = "SELECT cpf, nome, email, senha, dataNasc, telefone, listaCurriculos FROM Funcionario WHERE cpf = ".$cpf;
        $user = $connection->query($consultarUsuario);
        return $user;
    }
}

?>