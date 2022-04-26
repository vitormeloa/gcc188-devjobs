<?php

function setSituacao()
{
    $aplicacaoDAO->alterarAplicacao(($objetoAplicacao->setSituacao("NEGADO")), $connection);
    header("Location: consultarTodasAplicacoesContratante.php");
}

?>