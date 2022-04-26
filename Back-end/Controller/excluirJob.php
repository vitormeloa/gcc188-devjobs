<?php

include_once '../Persistence/Connection.php';
include_once '../Persistence/JobDAO.php';

$jobNome = $_POST['jobNome'];

$connection = new Connection();
$connection = $connection->getConnection();

$jobDAO = new JobDAO();
$jobDAO->excluirJob($jobNome, $connection);

?>