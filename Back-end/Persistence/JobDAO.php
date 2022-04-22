<?php

class CurriculoDAO
{
    function __construct(){}

    function jobCurriculo($job, $connection)
    {
        $inserirJob = "INSERT INTO Job(nome, qtdVagas, descricao, requisitos, beneficios, salario, remoto, cpfContratante) VALUES ('" . $job->getJobNome() . "'," . $job->getQtdVagas() . ",'" . $job->getDescricao() . "','" . $job->getRequisitos() . "','" . $job->getBeneficios() . "'," . $job->getSalario() . ",'" . $job->getRemoto() . "','" . $curriculo->getCpfContratante() . "')";

        if($connection->query($inserirJob) == TRUE)
        {
            echo "Job inserido com sucesso!";
            header("Location: ../../Front-end/views/jobsContratante.html");
        }
        else
        {
            echo "Erro no cadastramento: " . $connection->error;
            header("Location: ../../Front-end/views/cadastrarJob.html");
        }
    }

    function excluirJob($jobNome, $connection)
    {
        $excluirJob = "DELETE FROM Job WHERE nome = '" . $jobNome . "'";

        if($connection->query($excluirJob) == TRUE)
        {
            echo "Job excluído com sucesso!";
            header("Location: ../../Front-end/views/jobsContratante.html");
        }
        else
        {
            echo "Erro na Exclusao: " . $connection->error;
            header("Location: ../../Front-end/views/jobsContratante.html");
        }
    }

    function alterarJob($job, $connection)
    {
        $alterarUsuario = "UPDATE Job SET qtdVagas = " . $job->getQtdVagas() . ", descricao = '" . $job->getDescricao() . "', requisitos = '" . $job->getRequisitos() . "', beneficios = '" . $job->getBeneficios() . "', salario = '" . $job->getSalario() . "', remoto = '" . $job->getRemoto() . "' WHERE nome = '" . $job->getJobNome() . "'";
        return $connection->query($alterarJob);
    }

    function consultarJob($jobNome, $connection)
    {
        $consultarJob = "SELECT * FROM Job WHERE nome = '" . $jobNome . "'";
        $job = $connection->query($consultarJob);
        return $job;
    }

    function consultarTodosJobs($connection)
    {
        $consultarJobs = "SELECT * FROM Job";
        $jobs = $connection->query($consultarJobs);
        return $jobs;
    }

}

?>