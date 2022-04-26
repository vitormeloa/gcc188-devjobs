<?php

session_start();

include_once '../Persistence/Connection.php';
include_once '../Persistence/JobDAO.php';

$cpf = $_SESSION['cpf'];

$connection = new Connection();
$connection = $connection->getConnection();

$JobDAO = new JobDAO();
$todosJobs = $JobDAO->consultarTodosJobs($cpf, $connection);

if($todosJobs->num_rows > 0)
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

                <br>

                <table border = '1'>

                    <tr>
                        <th>Nome do Job</th>
                        <th>Quantidade de Vagas</th>
                        <th>Descricao</th>
                        <th>Requisitos</th>
                        <th>Beneficios</th>
                        <th>Salario</th>
                        <th>Remoto</th>
                    </tr>";
    while($job = $todosJobs->fetch_assoc())
    {
        echo
        "<tr>
            <td>" . $job['jobNome'] . "</td>
            <td>" . $job['qtdVagas'] . "</td>
            <td>" . $job['descricao'] . "</td>
            <td>" . $job['requisitos'] . "</td>
            <td>" . $job['beneficios'] . "</td>
            <td>" . $job['salario'] . "</td>
            <td>" . $job['remoto'] . "</td>
        </tr><br>";
    }
    echo
        "</table>

        <div class = 'userBox'>
            <br>
            <a href = '../../Front-end/views/jobsContratante.html' class = 'button' type = 'button'>Voltar</a>
        </div>

    </body>

    </html>";
}
else
{
    echo "Nenhum Job Cadastrado";
}

?>