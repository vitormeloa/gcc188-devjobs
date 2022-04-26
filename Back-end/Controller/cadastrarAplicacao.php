<?php

session_start();

include_once '../Persistence/Connection.php';
include_once '../Model/Aplicacao.php';
include_once '../Persistence/AplicacaoDAO.php';
include_once '../Persistence/JobDAO.php';

$connection = new Connection();
$connection = $connection->getConnection();

$curriculoNome = $_POST['curriculoNome'];
$motivo = $_POST['motivo'];
$cpfFuncionario = $_SESSION['cpf'];
$aplicacaoNome = $_POST['aplicacaoNome'];

$jobNome = $_SESSION['jobNome'];

$jobDAO = new JobDAO();
$job = $jobDAO->consultarJob($jobNome, $connection);

$job = $job->fetch_assoc();
$cpfContratante = $job['cpfContratante'];

$aplicacao = new Aplicacao($curriculoNome, $motivo, $jobNome, $cpfFuncionario, $cpfContratante, $aplicacaoNome);

$aplicacaoDAO = new AplicacaoDAO();
$aplicacaoDAO->cadastrarAplicacao($aplicacao, $connection);

?>