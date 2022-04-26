<?php

session_start();

include_once '../Persistence/Connection.php';
include_once '../Persistence/AplicacaoDAO.php';
include_once '../Model/Aplicacao.php';

$cpf = $_SESSION['cpf'];

$connection = new Connection();
$connection = $connection->getConnection();

$aplicacaoDAO = new AplicacaoDAO();
$todasAplicacoes = $aplicacaoDAO->consultarTodasAplicacoes($cpf, $connection);

if($todasAplicacoes->num_rows > 0)
{
    echo
    "<!DOCTYPE html>

        <html lang='pt-BR'>

            <head>
                <meta charset='UTF-8'>
                <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <title>Aplicações Recebidas|DevJobs</title>
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
                        <th>Nome do Currículo Aplicado</th>
                        <th>Nome do Job Aplicado</th>
                        <th>Motivo</th>
                        <th>Situação</th>
                        <th>Data da Aplicação</th>
                        <th>Hora da Aplicação</th>
                        <th>Aceitar</th>
                        <th>Negar</th>
                    </tr>";
    while($aplicacao = $todasAplicacoes->fetch_assoc())
    {
        $objetoAplicacao = new Aplicacao($aplicacao['curriculoNome'], $aplicacao['motivo'], $aplicacao['jobNome'], $aplicacao['cpfFuncionario'], $aplicacao['cpfContratante'], $aplicacao['aplicacaoNome']);
        echo
        "<tr>
            <td>" . $aplicacao['curriculoNome'] . "</td>
            <td>" . $aplicacao['jobNome'] . "</td>
            <td>" . $aplicacao['motivo'] . "</td>
            <td>" . $aplicacao['situacao'] . "</td>
            <td>" . $aplicacao['data'] . "</td>
            <td>" . $aplicacao['hora'] . "</td>
            <td><div><a href = 'aceitado.php' class = 'button' type = 'button'>Aceitar</a></div></td>
            <td><div><a href = 'negado.php' class = 'button' type = 'button'>Rejeitar</a></div></td>
        </tr><br>";
    }
    echo
        "</table>

        <div class = 'userBox'>
            <br>
            <a href = '../../Front-end/views/paginaInicialContratante.html' class = 'button' type = 'button'>Voltar</a>
        </div>

    </body>

    </html>";
}
else
{
    echo "Nenhuma Aplicação Cadastrada :/";
}

?>