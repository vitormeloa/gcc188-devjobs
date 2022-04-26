<?php

include_once '../Persistence/Connection.php';
include_once '../Persistence/AplicacaoDAO.php';

$aplicacaoNome = $_POST['aplicacaoNome'];

$connection = new Connection();
$connection = $connection->getConnection();

$aplicacaoDAO = new AplicacaoDAO();
$aplicacaoDAO->excluirAplicacao($aplicacaoNome, $connection);

?>