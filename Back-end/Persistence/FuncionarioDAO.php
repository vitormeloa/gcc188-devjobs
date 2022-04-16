<?php

class FuncionarioDAO
{
    function __construct(){}

    function cadastrarFuncionario($funcionario, $connection)
    {
        $inserirFuncionario = "INSERT INTO Funcionario(cpfFuncionario) VALUES ('" . $funcionario->getCpf() . "')";

        if($connection->query($inserirFuncionario) == TRUE)
        {
            echo "Funcionário inserido com sucesso! Faça o Login!";
            header("Location: ../../index.html");
        }
        else
        {
            echo "Erro no cadastramento: " . $connection->error;
            header("Location: ../../Front-end/cadastrarFuncionario.html");
        }
    }

}

?> 
