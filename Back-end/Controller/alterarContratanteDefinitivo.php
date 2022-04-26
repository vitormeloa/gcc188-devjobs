<?php

include_once '../Persistence/Connection.php';
include_once '../Model/Contratante.php';
include_once '../Persistence/UsuarioDAO.php';
include_once '../Persistence/ContratanteDAO.php';

$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$dataNasc = $_POST['dataNasc'];
$telefone = $_POST['telefone'];
$nomeEmpresa = $_POST['nomeEmpresa'];
$cnpj = $_POST['cnpj'];
$dataAberturaEmpresa = $_POST['dataAberturaEmpresa'];

$connection = new Connection();
$connection = $connection->getConnection();

$contratante = new Contratante($cpf, $nome, $email, $senha, $dataNasc, $telefone, $nomeEmpresa, $cnpj, $dataAberturaEmpresa);

$usuarioDAO = new UsuarioDAO();
$contratanteDAO = new ContratanteDAO();

if($usuarioDAO->alterarUsuario($contratante, $connection))
{
    echo "Usuário alterado com sucesso!";
    if($contratanteDAO->alterarContratante($contratante, $connection))
    {
        echo "Contratante alterado com sucesso!";
        header("Location: ../../Front-end/views/mostrarPerfil.html");
    }
}
else
{
    echo "Erro na alteração dos dados!" . $connection->error();
    header("Location: ../../Front-end/views/mostrarPerfil.html");
}


?>