<?php

class AplicacaoDAO
{
    function __construct(){}

    function cadastrarAplicacao($aplicacao, $connection)
    {
        $inserirAplicacao = "INSERT INTO Aplicacao(data, hora, motivo, situacao, curriculoNome, jobNome, cpfFuncionario, cpfContratante, aplicacaoNome) VALUES ('" . $aplicacao->getData() . "','" . $aplicacao->getHora() . "','" . $aplicacao->getMotivo() . "','" . $aplicacao->getSituacao() . "','" . $aplicacao->getCurriculoNome() . "','" . $aplicacao->getJobNome() . "','" . $aplicacao->getCpfFuncionario() . "','" . $aplicacao->getCpfContratante() . "','" . $aplicacao->getAplicacaoNome() . "')";
        if($connection->query($inserirAplicacao) == true)
        {
            echo "Aplicacao inserida com sucesso!";
            header("Location: ../Controller/jobsDisponiveis.php");
        }
        else
        {
            echo "Erro no cadastramento: " . $connection->error;
            header("Location: ../Controller/jobsDisponiveis.php");
        }
    }

    function excluirAplicacao($aplicacaoNome, $connection)
    {
        $excluirAplicacao = "DELETE FROM Aplicacao WHERE aplicacaoNome = '" . $aplicacaoNome . "'";

        if($connection->query($excluirAplicacao) == true)
        {
            echo "Aplicacao excluída com sucesso!";
            header("Location: ../../Front-end/views/aplicacoesFuncionario.html");
        }
        else
        {
            echo "Erro na Exclusao: " . $connection->error;
            header("Location: ../../Front-end/views/aplicacaosFuncionario.html");
        }
    }

    function alterarAplicacao($aplicacao, $connection)
    {
        $alterarAplicacao = "UPDATE Aplicacao SET motivo = '" . $aplicacao->getMotivo() . "', situacao = '" . $aplicacao->getSituacao() . "', curriculoNome = '" . $aplicacao->getCurriculoNome() . "' WHERE aplicacaoNome = '" . $aplicacao->getAplicacaoNome() . "'";
        return $connection->query($alterarAplicacao);
    }

    function consultarAplicacao($aplicacaoNome, $connection)
    {
        $consultarAplicacao = "SELECT * FROM Aplicacao WHERE aplicacaoNome = '" . $aplicacaoNome . "'";
        $aplicacao = $connection->query($consultarAplicacao);
        return $aplicacao;
    }

    function consultarTodasAplicacoes($cpf, $connection)
    {
        $consultaFuncionarioOrContratante = "SELECT funcionarioOrContratante FROM Usuario WHERE cpf = '" . $cpf . "'";
        
        $funcionarioOrContratante = $connection->query($consultaFuncionarioOrContratante);
        $funcionarioOrContratante = $funcionarioOrContratante->fetch_assoc();

        if($funcionarioOrContratante['funcionarioOrContratante'] == 'F')
        {
            $consultarAplicacoes = "SELECT * FROM Aplicacao WHERE cpfFuncionario = '" . $cpf . "'";
            $aplicacoes = $connection->query($consultarAplicacoes);
        }
        else
        {
            $consultarAplicacoes = "SELECT * FROM Aplicacao WHERE cpfContratante = '" . $cpf . "'";
            $aplicacoes = $connection->query($consultarAplicacoes);
        }

        return $aplicacoes;
    }

}

?>