<?php

session_start();

include_once '../Persistence/Connection.php';
include_once '../Model/Curriculo.php';
include_once '../Persistence/CurriculoDAO.php';

$cidadeOrigem = $_POST['cidadeOrigem'];
$estadoOrigem = $_POST['estadoOrigem'];
$github = $_POST['github'];
$linkedIn = $_POST['linkedIn'];
$objetivo = $_POST['objetivo'];
$formacaoAcademica = $_POST['formacaoAcademica'];
$expProfissionaisRelevantes = $_POST['expProfissionaisRelevantes'];
$especialidade = $_POST['especialidade'];
$cpf = $_SESSION['cpf'];
$curriculoNome = $_POST['curriculoNome'];

$connection = new Connection();
$connection = $connection->getConnection();

$curriculo = new Curriculo($cidadeOrigem, $estadoOrigem, $github, $linkedIn, $objetivo, $formacaoAcademica, $expProfissionaisRelevantes, $especialidade, $cpf, $curriculoNome);

$curriculoDAO = new CurriculoDAO();
$curriculoDAO->cadastrarCurriculo($curriculo, $connection);

?>