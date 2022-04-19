<?php

include_once '../Persistence/Connection.php';
include_once '../Persistence/UsuarioDAO.php';

$cpf = $_POST['cpf'];

$connection = new Connection();
$connection = $connection->getConnection();

$usuarioDAO = new UsuarioDAO();
$usuarioDAO->excluirUsuario($cpf, $connection);

?>