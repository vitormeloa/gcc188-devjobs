<?php

class FuncionarioDAO
{
    function __construct(){}

    function cadastrarFuncionario($funcionario, $connection)
    {
        $inserirFuncionario = "INSERT INTO Funcionario(cpfFuncionario) VALUES ('" . $funcionario->getCpf() . "')";

        if($connection->query($inserirFuncionario) == TRUE)
        {
            echo "Cadastro realizado com sucesso!";
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