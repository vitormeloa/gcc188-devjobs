<?php

class jobDAO
{
    function __construct(){}

    function cadastrarJob($job, $connection)
    {
        $inserirJob = "INSERT INTO Jobs(nome, qtdVagas, descricao, requisitos, beneficios, salario, remoto, cpfContratante) VALUES ('" . $job->getJobNome() . "'," . $job->getQtdVagas() . ",'" . $job->getDescricao() . "','" . $job->getRequisitos() . "','" . $job->getBeneficios() . "'," . $job->getSalario() . ",'" . $job->getRemoto() . "','" . $job->getCpfContratante() . "')";

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
        $excluirJob = "DELETE FROM Jobs WHERE nome = '" . $jobNome . "'";

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
        $alterarJob = "UPDATE Jobs SET qtdVagas = " . $job->getQtdVagas() . ", descricao = '" . $job->getDescricao() . "', requisitos = '" . $job->getRequisitos() . "', beneficios = '" . $job->getBeneficios() . "', salario = " . $job->getSalario() . ", remoto = '" . $job->getRemoto() . "' WHERE nome = '" . $job->getJobNome() . "'";
        return $connection->query($alterarJob);
    }

    function consultarJob($jobNome, $connection)
    {
        $consultarJob = "SELECT * FROM Jobs WHERE nome = '" . $jobNome . "'";
        $job = $connection->query($consultarJob);
        return $job;
    }

    function consultarTodosJobs($connection)
    {
        $consultarJobs = "SELECT * FROM Jobs";
        $jobs = $connection->query($consultarJobs);
        return $jobs;
    }

}

?>