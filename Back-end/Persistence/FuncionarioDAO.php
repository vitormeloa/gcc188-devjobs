<?php

class FuncionarioDAO
{
    function __construct(){}

    function cadastrarFuncionario($funcionario, $connection)
    {
        $inserirFuncionario = "INSERT INTO Funcionario(cpf, nome, email, senha, dataNasc, telefone, listaCurriculos) VALUES ('". $funcionario->getCpf() . "','" . $funcionario->getNome() . "','" . $funcionario->getEmail() . "','" . $funcionario->getSenha() . "','" . $funcionario->getDataNasc() . "','" . $funcionario->getTelefone() . "','A')";

        echo "<br>" . $inserirFuncionario;
        /*if($connection->query($inserirFuncionario) == TRUE)
        {
            echo "Funcionario inserido com sucesso!";
        }
        else
        {
            echo "Erro no cadastramento: " . $connection->error;
        }*/
    }
}

?> 
