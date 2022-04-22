<?php

include_once '../Persistence/Connection.php';
include_once '../Model/Job.php';
include_once '../Persistence/JobDAO.php';

$jobNome = $_POST['jobNome'];
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

if($jobDAO->alterarJob($job, $connection))
{
    echo "Job alterado com sucesso!";
    header("Location: ../../Front-end/views/jobsContratante.html");
}
else
{
    echo "Erro na alteração dos dados!" . $connection->error();
    header("Location: ../../Front-end/views/jobsContratante.html");
}


?>