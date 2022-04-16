<?php

include_once '../Persistence/Connection.php';
include_once '../Model/Funcionario.php';
include_once '../Persistence/UsuarioDAO.php';

$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$dataNasc = $_POST['dataNasc'];
$telefone = $_POST['telefone'];

$connection = new Connection();
$connection = $connection->getConnection();

$funcionario = new Funcionario($cpf, $nome, $email, $senha, $dataNasc, $telefone);

$usuarioDAO = new UsuarioDAO();

if($usuarioDAO->alterarUsuario($funcionario, $connection))
{
    echo "Usuário alterado com sucesso!";
    header("Location: consultarUsuario.php");
}
else
{
    echo "Erro na alteração dos dados!" . $connection->error();
    header("Location: consultarUsuario.php");
}


?>