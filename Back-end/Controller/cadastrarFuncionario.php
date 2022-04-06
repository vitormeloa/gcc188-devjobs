<?php

include_once '../Persistence/Connection.php';
include_once '../Model/Funcionario.php';
include_once '../Persistence/FuncionarioDAO.php';

echo "Antes de pegar com POST";

$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$dataNasc = $_POST['dataNasc'];
$telefone = $_POST['telefone'];

echo "Depois de pegar com POST";

$funcionario = new Funcionario($cpf, $nome, $email, $senha, $dataNasc, $telefone, 'A');

echo "Depois de instanciar Funcionario";

$connection = new Connection();
$connection = $connection->getConnection();

echo "Depois de instanciar Connection";

$funcionarioDAO = new FuncionarioDAO();
$funcionarioDAO->cadastrarFuncionario($funcionario, $connection);

?>
