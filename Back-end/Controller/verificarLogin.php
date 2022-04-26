<?php

include_once '../Persistence/UsuarioDAO.php';
include_once '../Persistence/Connection.php';

$cpf = $_POST['cpf'];
$senha = $_POST['senha'];

$connection = new Connection();
$connection = $connection->getConnection();

$usuarioDAO = new UsuarioDAO();
$user = $usuarioDAO->consultarUsuario($cpf, $connection);

if($user->num_rows > 0)
{
    $user = $user->fetch_assoc();
    if($user['senha'] == $senha and $user['funcionarioOrContratante'] == 'F')
    {
        header("Location: ../../Front-end/views/paginaInicialFuncionario.html");
    }
    else if($user['senha'] == $senha and $user['funcionarioOrContratante'] == 'C')
    {
        header("Location: ../../Front-end/views/paginaInicialContratante.html");
    }
    else
    {
        echo "CPF ou Senha Incorretos!";
        header("Location: ../../index.html");
    }
}
else
{
    echo "Usuario Inexistente";
    header("Location: ../../index.html");
}

?>