<?php

include_once '../Persistence/Connection.php';
include_once '../Model/Contratante.php';
include_once '../Persistence/ContratanteDAO.php';
include_once '../Persistence/UsuarioDAO.php';

$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$dataNasc = $_POST['dataNasc'];
$telefone = $_POST['telefone'];
$nomeEmpresa = $_POST['nomeEmpresa'];
$cpnj = $_POST['cpnj'];
$dataAberturaEmpresa = $_POST['dataAberturaEmpresa'];

$connection = new Connection();
$connection = $connection->getConnection();

$contratante = new Contratante($cpf, $nome, $email, $senha, $dataNasc, $telefone, $nomeEmpresa, $cnpj, $dataAberturaEmpresa);

$usuarioDAO = new UsuarioDAO();
$usuarioDAO->cadastrarUsuario($contratante, $connection);

$contratanteDAO = new ContratanteDAO();
$contratanteDAO->cadastrarContratante($contratante, $connection);

?>
