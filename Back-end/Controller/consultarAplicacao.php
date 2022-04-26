<?php

include_once '../Persistence/Connection.php';
include_once '../Persistence/AplicacaoDAO.php';

$aplicacaoNome = $_POST['aplicacaoNome'];

$connection = new Connection();
$connection = $connection->getConnection();

$aplicacaoDAO = new AplicacaoDAO();
$aplicacao = $aplicacaoDAO->consultarAplicacao($aplicacaoNome, $connection);

$aplicacao = $aplicacao->fetch_assoc();
echo
"<!DOCTYPE html>

<html lang='pt-BR'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Aplicação</title>
        <link rel='stylesheet' href='../../Front-end/css/estilo.css'>
    </head>

    <body>

        <header id='header'>
            
            <nav class='container'>
                <a class='logo' href='#'>Dev<span>Jobs</span></a>
            </nav>

        </header>
        
        <main>

            <div class = 'loginBox'>

                <section class = 'section'>

                    <div class = 'container grid'>

                        <form action = 'alterarAplicacao.php' method = 'POST' autocomplete='off'>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>        
                            <br>
                            <br>
                            <br>
                            <br>
                            <h1>Alterar Aplicação</h1>
                            <br>
                            
                            <div class = 'userBox'>
                                <label for = 'data'>Data da Aplicação:</label>
                                <br>
                                <input type = 'text' name = 'data' value = '" . $aplicacao['data'] . "' hidden>
                                <input type = 'text' name = 'data' value = '" . $aplicacao['data'] . "' disabled>
                                <br>
                            </div>

                            <div class = 'userBox'>
                                <label for = 'hora'>Hora da Aplicação:</label>
                                <br>
                                <input type = 'text' name = 'hora' value = '" . $aplicacao['hora'] . "' hidden>
                                <input type = 'text' name = 'hora' value = '" . $aplicacao['hora'] . "' disabled>
                                <br>
                            </div>

                            <div class = 'userBox'>
                                <br>
                                <label for = 'motivo'>Motivo:</label>
                                <br>
                                <input type = 'textarea' maxlength = '100' name = 'motivo' placeholder = 'Pequena descricao sobre o motivo da aplicacao!' value = '" . $aplicacao['motivo'] . "'>
                                <br>
                            </div>

                            <div class = 'userBox'>
                                <br>
                                <label for = 'situacao'>Situação:</label>
                                <br>
                                <input type = 'text' name = 'situacao' value = '" . $aplicacao['situacao'] . "' hidden>
                                <input type = 'text' name = 'situacao' value = '" . $aplicacao['situacao'] . "' disabled>
                                <br>
                            </div>
                        
                            <div class = 'userBox'>
                                <br>
                                <label for = 'curriculoNome'>Nome do Currículo Aplicado:</label>
                                <br>
                                <input type = 'text' name = 'curriculoNome' value = '" . $aplicacao['curriculoNome'] . "'>
                                <br>
                            </div>

                            <div class = 'userBox'>
                                <br>
                                <label for = 'jobNome'>Nome do Job Aplicado:</label>
                                <br>
                                <input type = 'text' name = 'jobNome' value = '" . $aplicacao['jobNome'] . "' hidden>
                                <input type = 'text' name = 'jobNome' value = '" . $aplicacao['jobNome'] . "' disabled>
                                <br>
                            </div>

                            <div class = 'userBox'>
                                <br>
                                <label for = 'aplicacaoNome'>Nome da Aplicação:</label>
                                <br>
                                <input type = 'text' name = 'aplicacaoNome' value = '" . $aplicacao['aplicacaoNome'] . "' hidden>
                                <input type = 'text' name = 'aplicacaoNome' value = '" . $aplicacao['aplicacaoNome'] . "' disabled>
                                <br>
                            </div>

                            <div class = 'userBox'>
                                <br>
                                <label for = 'cpfFuncionario'></label>
                                <br>
                                <input type = 'text' name = 'cpfFuncionario' value = '" . $aplicacao['cpfFuncionario'] . "' hidden>
                                <br>
                            </div>

                            <div class = 'userBox'>
                                <br>
                                <label for = 'cpfContratante'></label>
                                <br>
                                <input type = 'text' name = 'cpfContratante' value = '" . $aplicacao['cpfContratante'] . "' hidden>
                                <br>
                            </div>

                            <div class = 'userBox'>
                                <br>
                                <button class = 'button' type = 'submit'>Alterar</button>
                            </div>

                            <div class = 'userBox'>
                                <br>
                                <button class = 'button' type = 'reset'>Resetar Campos</button>
                            </div>

                            <div class = 'userBox'>
                                <br>
                                <a href = '../../Front-end/views/aplicacoesFuncionario.html' class = 'button' type = 'button'>Voltar</a>
                            </div>

                        </form>

                    </div>

                </section>

            </div>

        </main>

    </body>

</html>";

?>