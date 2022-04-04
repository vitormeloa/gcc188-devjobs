<?php

import_once 

$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$dataNasc = $_POST['dataNasc'];
$telefone = $_POST['telefone'];

$connection = new Connection();
$connection = $connection->getConnection();

$inserirFuncionario = "INSERT INTO Funcionario(cpf, nome, email, senha, dataNasc, telefone, listaCurriculos) VALUES ('$cpf','$nome','$email','$senha','$dataNasc','$telefone','B')";
    
if($connection->query($inserirFuncionario) == TRUE)
{
    echo "Funcionario inserido com sucesso!";
}
else
{
    echo "Erro no cadastramento: " . $connection->error;
}

?>
