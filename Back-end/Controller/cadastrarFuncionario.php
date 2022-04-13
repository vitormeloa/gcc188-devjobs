<?php

include_once '../Persistence/Connection.php';
include_once '../Model/Funcionario.php';
include_once '../Persistence/FuncionarioDAO.php';

$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$dataNasc = $_POST['dataNasc'];
$telefone = $_POST['telefone'];
 

$funcionario = new Funcionario($cpf, $nome, $email, $senha, $dataNasc, $telefone, 'A');

$connection = new Connection();
$connection = $connection->getConnection();

$funcionarioDAO = new FuncionarioDAO();
$funcionarioDAO->cadastrarFuncionario($funcionario, $connection);

?>
