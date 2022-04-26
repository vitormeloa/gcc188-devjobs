<?php

include_once '../Persistence/Connection.php';
include_once '../Persistence/JobDAO.php';

$connection = new Connection();
$connection = $connection->getConnection();

$jobDAO = new JobDAO();

$jobsDisponiveis = $jobDAO->jobsDisponiveis($connection);

if($jobsDisponiveis->num_rows > 0)
{
    echo
    "<!DOCTYPE html>

    <html lang='pt-BR'>

        <head>
            <meta charset='UTF-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Jobs|DevJobs</title>
            <link rel='stylesheet' href='../../Front-end/css/estilo.css'>
        </head>

        <body>

            <header id='header'>
                <nav class='container'>
                    <a class='logo' href='#'>Dev<span>Jobs</span></a>
                </nav>
            </header>

            <br><br><br><br>

            <div class = 'container grid'>
                <h1 style = 'text-align:center;color:var(--tittle-color);font-family:'Segoe UI''>JOB'S EM ABERTO:</h1>
            </div>";
            while($job = $jobsDisponiveis->fetch_assoc())
            {
                echo
                "<main>
                    
                    <br>

                    <div class = 'row justify-content-around'>

                        <div class = 'col-6 row-card'>

                            <form action = 'aplicacaoJob.php' method = 'POST'>
                        
                                <div class = 'card-job'>
                                    <div class = 'header-job'>
                                        <input name = 'jobNome' value = '" . $job['jobNome'] . "' hidden>
                                        <h4 class = 'titulo-job'>" . $job['jobNome'] . "</h4>
                                    </div>

                                    <div class = 'body-job'>

                                        <p class = 'titulo-body'>Descrição:</p>
                                        <div style = 'width: 70%'>
                                            <p>" . $job['descricao'] . "</p>
                                        </div>

                                        <div class = 'row'>
                                            <div class = 'col-4'>
                                                <p class = 'titulo-body'>Quantidade de vagas:</p>
                                                <p>" . $job['qtdVagas'] . "</p>
                                            </div>

                                            <div class = 'col-4'>
                                                <p class = 'titulo-body'>Requisitos:</p>
                                                <p>" . $job['requisitos'] . "</p>
                                            </div>

                                            <div class = 'col-4'>
                                                <p class = 'titulo-body'>Benefícios:</p>
                                                <p>" . $job['beneficios'] . "</p>
                                            </div>

                                            <div class = 'col-4'>
                                                <p class = 'titulo-body'>Remoto?</p>
                                                <p>" . $job['remoto'] . "</p>
                                            </div>

                                            <div class = 'col-4'>
                                                <p class = 'titulo-body'>Salário:</p>
                                                <p>R$" . $job['salario'] . "</p>
                                                <br>
                                            </div>

                                        </div>

                                    </div>

                                    <button class = 'button' type = 'submit'>APLICAR CURRICULO</button>
                                    <br>
                                    <br>

                                </div>

                            </form>
                            
                        </div>

                    </div>";
            }
                    echo
                    "<br>
                    <br>
                    <br>

                    <div class = ' container grid'>
                        <div class = 'userBox'>
                            <a href = '../../Front-end/views/paginaInicialFuncionario.html' class = 'button' type = 'button'>Voltar</a>            
                        </div>
                    </div>
                    
                    <br>

                </main>

        </body>

    </html>";
}
else
{
    echo "Nenhum Job Disponivel!";
}

?>