<?php

class UsuarioDAO
{
    function __construct(){}

    function cadastrarUsuario($usuario, $connection)
    {
        $inserirUsuario = "INSERT INTO Usuario(cpf, nome, email, senha, dataNasc, telefone, funcionarioOrContratante) VALUES ('" . $usuario->getCpf() . "','" . $usuario->getNome() . "','" . $usuario->getEmail() . "','" . $usuario->getSenha() . "','" . $usuario->getDataNasc() . "','" . $usuario->getTelefone() . "','" . $usuario->getFuncionarioOrContratante() . "')";

        if($connection->query($inserirUsuario) == TRUE)
        {   
            echo "Cadastro realizado com sucesso";
        }
        else
        {
            echo "Erro no cadastramento: " . $connection->error;
        }
    }

    function excluirUsuario($cpf, $connection)
    {
        $excluirUsuario = "DELETE FROM Usuario WHERE cpf = " . $cpf;

        if($connection->query($excluirUsuario) == TRUE)
        {
            echo "Usuário excluído com sucesso!";
            header("Location: ../../index.html");
        }
    }

    function alterarUsuario($usuario, $connection)
    {
        $alterarUsuario = "UPDATE Usuario SET nome = '" . $usuario->getNome() . "', email = '" . $usuario->getEmail() . "', senha = '" . $usuario->getSenha() . "', dataNasc = '" . $usuario->getDataNasc() . "', telefone = '" . $usuario->getTelefone() . "', funcionarioOrContratante = '" . $usuario->getFuncionarioOrContratante() . "' WHERE cpf = " . $usuario->getCpf();
        return $connection->query($alterarUsuario);
    }

    function consultarUsuario($cpf, $connection)
    {
        $consultarUsuario = "SELECT cpf, nome, email, senha, dataNasc, telefone, funcionarioOrContratante FROM Usuario WHERE cpf = " . $cpf;
        $user = $connection->query($consultarUsuario);
        return $user;
    }

}
?>
