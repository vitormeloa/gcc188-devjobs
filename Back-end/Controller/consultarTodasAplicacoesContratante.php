<?php

session_start();

include_once '../Persistence/Connection.php';
include_once '../Persistence/AplicacaoDAO.php';

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

                        <div class = 'container grid'>";

                            while($aplicacao = $todasAplicacoes->fetch_assoc())
                            {
                                echo
                                "<form action = 'alterarAplicacao.php' method = 'POST' autocomplete='off'>
                                    <br>
                                    <h1>Alterar Aplicação</h1>
                                    <br>
                                    
                                    <div>
                                        <label for = 'cpfFuncionario'></label>
                                        <input type = 'text' name = 'cpfFuncionario' value = '" . $aplicacao['cpfFuncionario'] . "' hidden>
                                    </div>
                                    <div>
                                        <label for = 'cpfContratante'></label>
                                        <input type = 'text' name = 'cpfContratante' value = '" . $aplicacao['cpfContratante'] . "' hidden>
                                    </div>
                                    <div>
                                        <label for = 'aplicacaoNome'></label>
                                        <input type = 'text' name = 'aplicacaoNome' value = '" . $aplicacao['aplicacaoNome'] . "' hidden>
                                    </div>

                                    <div class = 'userBox'>
                                        <label for = 'data'>Data da Aplicação:</label>
                                        <br>
                                        <input type = 'text' name = 'data' value = '" . $aplicacao['data'] . "' hidden>
                                        <input type = 'text' name = 'data' value = '" . $aplicacao['data'] . "' disabled>
                                        <br>
                                    </div>

                                    <div class = 'userBox'>
                                        <br>
                                        <label for = 'motivo'>Motivo:</label>
                                        <br>
                                        <input type = 'textarea' name = 'motivo'  value = '" . $aplicacao['motivo'] . "' hidden>
                                        <input type = 'textarea' name = 'motivo'  value = '" . $aplicacao['motivo'] . "' disabled>
                                        <br>
                                    </div>

                                    <div class = 'userBox'>
                                        <div class = ''>
                                            <br>
                                            <label for = 'situacao'>Situação:</label>
                                            <br>
                                            <select name = 'situacao' id = 'remoto'>
                                                <option value = '" . $aplicacao['situacao'] . "'></option>
                                                <option>ACEITO</option>
                                                <option>RECUSADO</option>
                                            </select>
                                            <br>
                                            <br>
                                        </div>
                                    </div>
                                
                                    <div class = 'userBox'>
                                        <br>
                                        <label for = 'curriculoNome'>Nome do Currículo Aplicado:</label>
                                        <br>
                                        <input type = 'text' name = 'curriculoNome' value = '" . $aplicacao['curriculoNome'] . "' hidden>
                                        <input type = 'text' name = 'curriculoNome' value = '" . $aplicacao['curriculoNome'] . "' disabled>
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
                                        <button class = 'button' type = 'submit'>Enviar</button>
                                    </div>

                                </form>";
                            }
                        
                        echo    
                        "
                            <div class = 'userBox'>
                                <br>
                                <a href = '../../Front-end/views/paginaInicialContratante.html' class = 'button' type = 'button'>Voltar</a>
                            </div>
                        </div>

                    </section>

                </div>

            </main>

        </body>

    </html>";
}
else
{
    echo "Nenhuma Solicitação Recebida :/.
    <div class = 'userBox'>
        <br>
        <a href = '../../Front-end/views/paginaInicialContratante.html' class = 'button' type = 'button'>Voltar</a>
    </div>";

}

?>