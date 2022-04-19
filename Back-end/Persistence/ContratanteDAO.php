<?php

class ContratanteDAO
{
    function __construct(){}

    function cadastrarContratante($contratante, $connection)
    {
        $inserirContratante = "INSERT INTO Contratante(cpfContratante, nomeEmpresa, CNPJ, dataAberturaEmpresa) VALUES ('" . $contratante->getCpf() . "','" . $contratante->getNomeEmpresa() . "','" . $contratante->getCnpj() . "','" . $contratante->getDataAberturaEmpresa() . "')";

        if($connection->query($inserirContratante) == TRUE)
        {
            echo "Contratante inserido com sucesso! Faça o Login!";
            header("Location: ../../index.html");
        }
        else
        {
            echo "Erro no cadastramento: " . $connection->error;
            header("Location: ../../Front-end/cadastrarContratante.html");
        }
    }

    function consultarContratante($cpf, $connection)
    {
        $consultarContratante = "SELECT * FROM Contratante WHERE cpfContratante = " . $cpf;
        $contratante = $connection->query($consultarContratante);
        return $contratante;
    }

    function alterarContratante($contratante, $connection)
    {
        $alterarContratante = "UPDATE Contratante SET nomeEmpresa = '" . $contratante->getNomeEmpresa() . "', cnpj = '" . $contratante->getCnpj() . "', dataAberturaEmpresa = '" . $contratante->getDataAberturaEmpresa() . "' WHERE cpfContratante = " . $contratante->getCpf();
        return $connection->query($alterarContratante);
    }

}

?> 
