<?php

include_once '../Persistence/Connection.php';
include_once '../Persistence/CurriculoDAO.php';

$curriculoNome = $_POST['curriculoNome'];

$connection = new Connection();
$connection = $connection->getConnection();

$curriculoDAO = new CurriculoDAO();
$curriculoDAO->excluirCurriculo($curriculoNome, $connection);

?>