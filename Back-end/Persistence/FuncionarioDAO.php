<?php

class FuncionarioDAO
{
    function __construct(){}

    function cadastrarFuncionario($funcionario, $connection)
    {
        $inserirFuncionario = "INSERT INTO Usuario(cpf, nome, email, senha, dataNasc, telefone) VALUES ('". $funcionario->getCpf() . "','" . $funcionario->getNome() . "','" . $funcionario->getEmail() . "','" . $funcionario->getSenha() . "','" . $funcionario->getDataNasc() . "','" . $funcionario->getTelefone() . "','" . $funcionario->getFuncionarioOrContratante . ")";

        if($connection->query($inserirFuncionario) == TRUE)
        {
            echo "Funcionario inserido com sucesso!";
        }
        else
        {
            echo "Erro no cadastramento: " . $connection->error;
        }
    }

    

}

?> 
