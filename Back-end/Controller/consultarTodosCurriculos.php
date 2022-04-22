<?php

include_once '../Persistence/Connection.php';
include_once '../Persistence/CurriculoDAO.php';

$connection = new Connection();
$connection = $connection->getConnection();

$curriculoDAO = new CurriculoDAO();
$todosCurriculos = $curriculoDAO->consultarTodosCurriculos($connection);

if($todosCurriculos->num_rows > 0)
{
    while($curriculo = $todosCurriculos->fetch_assoc())
    {
        echo $curriculo['cidadeOrigem'] . " " . $curriculo['estadoOrigem'] . " " . $curriculo['github'] . " " . $curriculo['linkedIn'] . " " . $curriculo['objetivo'] . " " . $curriculo['formacaoAcademica'] . " " . $curriculo['expProfissionaisRelevantes'] . " " . $curriculo['especialidade'] . " " . $curriculo['cpfFuncionario'] . " " . $curriculo['curriculoNome'] . "<br>";
    }
}

?>