<?php

include_once '';

$aplicacaoDAO->alterarAplicacao(($objetoAplicacao->setSituacao("ACEITADO")), $connection);
header("Location: consultarTodasAplicacoesContratante.php");

?>