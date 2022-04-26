<?php

include_once '../Persistence/Connection.php';
include_once '../Model/Aplicacao.php';
include_once '../Persistence/AplicacaoDAO.php';

$motivo = $_POST['motivo'];
$curriculoNome = $_POST['curriculoNome'];
$jobNome = $_POST['jobNome'];
$cpfFuncionario = $_POST['cpfFuncionario'];
$cpfContratante = $_POST['cpfContratante'];
$aplicacaoNome = $_POST['aplicacaoNome'];

$connection = new Connection();
$connection = $connection->getConnection();

$aplicacao = new Aplicacao($curriculoNome, $motivo, $jobNome, $cpfFuncionario, $cpfContratante, $aplicacaoNome);

$aplicacaoDAO = new AplicacaoDAO();

if($aplicacaoDAO->alterarAplicacao($aplicacao, $connection))
{
    echo "Aplicacao alterada com sucesso!";
    header("Location: ../../Front-end/views/aplicacoesFuncionario.html");
}
else
{
    echo "Erro na alteração dos dados!" . $connection->error();
    header("Location: ../../Front-end/views/aplicacoesFuncionario.html");
}


?>