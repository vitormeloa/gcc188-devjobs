<?php

include_once '../Persistence/Connection.php';
include_once '../Persistence/CurriculoDAO.php';

$cpf = $_POST['cpf'];

$connection = new Connection();
$connection = $connection->getConnection();

$curriculoDAO = new CurriculoDAO();
$todosCurriculos = $curriculoDAO->consultarTodosCurriculos($cpf, $connection);

if($todosCurriculos->num_rows > 0)
{
    echo
    "<!DOCTYPE html>

        <html lang='pt-BR'>

            <head>
                <meta charset='UTF-8'>
                <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <title>Currículos|DevJobs</title>
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
                        <th>Nome do Currículo</th>
                        <th>Cidade de Origem</th>
                        <th>Estado de Origem</th>
                        <th>GitHub</th>
                        <th>LinkedIn</th>
                        <th>Objetivo</th>
                        <th>Formação Acadêmica</th>
                        <th>Experiências Profissionais Relevantes</th>
                        <th>Especialidade</th>
                    </tr>";
    while($curriculo = $todosCurriculos->fetch_assoc())
    {
        echo
        "<tr>
            <td>" . $curriculo['nome'] . "</td>
            <td>" . $curriculo['cidadeOrigem'] . "</td>
            <td>" . $curriculo['estadoOrigem'] . "</td>
            <td>" . $curriculo['github'] . "</td>
            <td>" . $curriculo['linkedIn'] . "</td>
            <td>" . $curriculo['objetivo'] . "</td>
            <td>" . $curriculo['formacaoAcademica'] . "</td>
            <td>" . $curriculo['expProfissionaisRelevantes'] . "</td>
            <td>" . $curriculo['especialidade'] . "</td>
        </tr><br>";
    }
    echo
        "</table>

        <div class = 'userBox'>
            <br>
            <a href = '../../Front-end/views/curriculosFuncionario.html' class = 'button' type = 'button'>Voltar</a>
        </div>

    </body>

    </html>";
}

?>