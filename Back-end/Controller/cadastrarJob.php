<?php

session_start();

include_once '../Persistence/Connection.php';
include_once '../Model/Job.php';
include_once '../Persistence/JobDAO.php';

$jobNome = $_POST['jobNome'];
$_SESSION['jobNome'] = $jobNome;
$qtdVagas = $_POST['qtdVagas'];
$descricao = $_POST['descricao'];
$requisitos = $_POST['requisitos'];
$beneficios = $_POST['beneficios'];
$salario = $_POST['salario'];
$remoto = $_POST['remoto'];
$cpfContratante = $_POST['cpfContratante'];

$connection = new Connection();
$connection = $connection->getConnection();

$job = new Job($jobNome, $qtdVagas, $descricao, $requisitos, $beneficios, $salario, $remoto, $cpfContratante);

$jobDAO = new JobDAO();
$jobDAO->cadastrarJob($job, $connection);

?>