<?php

include_once '../Persistence/Connection.php';
include_once '../Model/Funcionario.php';
include_once '../Persistence/FuncionarioDAO.php';
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
$usuarioDAO->cadastrarUsuario($funcionario, $connection);

$funcionarioDAO = new FuncionarioDAO();
$funcionarioDAO->cadastrarFuncionario($funcionario, $connection);

?>
