<?php

include_once '../Persistence/Connection.php';
include_once '../Model/Usuario.php';
include_once '../Persistence/UsuarioDAO.php';

$cpf = $_POST['cpf'];

$connection = new Connection();
$connection = $connection->getConnection();

$usuarioDAO = new UsuarioDAO();
$user = $usuarioDAO->consultarCPF($cpf, $connection);

$user = $user->fetch_assoc();
if($user['funcionarioOrContratante'] == 'F')
{
    header("Location: ../../Front-end/views/perfilFuncionario.html");
}
else
{
    header("Location: ../../Front-end/views/perfilContratante.html");
}


?>