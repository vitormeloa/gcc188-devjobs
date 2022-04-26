<?php

include_once '../Persistence/Connection.php';
include_once '../Persistence/JobDAO.php';

$jobNome = $_POST['jobNome'];

$connection = new Connection();
$connection = $connection->getConnection();

$jobDAO = new JobDAO();
$job = $jobDAO->consultarJob($jobNome, $connection);

$job = $job->fetch_assoc();
echo "<!DOCTYPE html>

<html lang='pt-BR'>

    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Alterar Jobs | DevJobs</title>
        <link rel='stylesheet' href='../../Front-end/css/estilo.css'>
    </head>
    
    <body>
        <header id='header'>
            <nav class='container'>
                <a class='logo' href='#'>Dev<span>Jobs</span></a>
            </nav>
        </header>

        <div class='loginBox'>

            <section class='section'>

                <div class='container grid'>

                    <form action = 'alterarJob.php' method = 'POST'>
                    
                        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                        <h2>Alterar job</h2>

                        <div class = 'userBox'>
                            <label for = 'jobNome'>Nome do Job:</label>
                            <br>
                            <input type = 'text' name = 'jobNome' maxlength = '50' value = '" . $job['nome'] . "' hidden>
                            <input type = 'text' name = 'jobNome' maxlength = '50' value = '" . $job['nome'] . "' disabled>
                            <br>
                        </div>

                        <div class = 'userBox'>
                            <label for = 'qtdVagas'>Quantidade de Vagas:</label>
                            <br>
                            <input type = 'number' name = 'qtdVagas' placeholder = 'No mínimo 1 vaga' step = '1' min = '1' value = '" . $job['qtdVagas'] . "'>
                            <br>
                        </div>

                        <div class = 'userBox'>
                            <br>
                            <label for = 'descricao'>Descrição:</label>
                            <br>
                            <input type = 'text' name = 'descricao' placeholder = 'Pequena descrição da vaga' maxlength = '300' value = '" . $job['descricao'] . "'>
                            <br>
                        </div>

                        <div class = 'userBox'>
                            <br>
                            <label for = 'requisitos'>Requisitos:</label>
                            <br>
                            <input type = 'text' name = 'requisitos' placeholder = 'Pequena descrição dos requisitos' maxlength = '200' value = '" . $job['requisitos'] . "'>
                            <br>
                        </div>
                    
                        <div class = 'userBox'>
                            <br>
                            <label for = 'beneficios'>Benefícios:</label>
                            <br>
                            <input type = 'text' name = 'beneficios' value = '" . $job['beneficios'] . "' maxlength = '200'>
                            <br>
                        </div>

                        <div class = 'userBox'>
                                <div class = ''>
                                    <br>
                                    <label for = 'remoto'>Remoto:</label>
                                    <br>
                                    <select name = 'remoto'>
                                        <option selected disabled value = '" . $job['remoto'] . "'></option>
                                        <option>Sim</option>
                                        <option>Não</option>
                                        <option>Híbrido</option>
                                    </select>
                                    <br>
                                    <br>
                                </div>
                        </div>

                        <div class = 'userBox'>
                            <br>
                            <label for = 'salario'>Salário:</label>
                            <br>
                            <input type = 'number' name = 'salario' placeholder = 'Opcional' value = '" . $job['salario'] . "' step = '0.01'>
                            <br>
                        </div>

                        <div class = 'userBox'>
                            <br>
                            <label for = 'cpfContratante'>Seu CPF:</label>
                            <br>
                            <input type = 'text' name = 'cpfContratante' value = '" . $job['cpfContratante'] . "' hidden>
                            <input type = 'text' name = 'cpfContratante' value = '" . $job['cpfContratante'] . "' disabled>
                            <br>
                        </div>

                        <div class = 'userBox'>
                            <br>
                            <button class = 'button' type = 'submit'>Alterar Dados</button>
                        </div>

                        <div class = 'userBox'>
                            <br>
                            <button class = 'button' type = 'reset'>Resetar Campos</button>
                        </div>

                        <div class = 'userBox'>
                            <br>
                            <a href = '../../Front-end/views/jobsContratante.html' class = 'button' type = 'button'>Voltar</a>
                        </div>

                    </form>

                </div>

            </section>

        </div>

    </body>

</html>";

?>