<?php

include_once '../Persistence/Connection.php';
include_once '../Persistence/CurriculoDAO.php';

$curriculoNome = $_POST['curriculoNome'];

$connection = new Connection();
$connection = $connection->getConnection();

$curriculoDAO = new CurriculoDAO();
$curriculo = $curriculoDAO->consultarCurriculo($curriculoNome, $connection);

$curriculo = $curriculo->fetch_assoc();
echo "<!DOCTYPE html>

<html lang='pt-BR'>

    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Perfil|DevJobs</title>
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

                    <form action = 'alterarCurriculo.php' method = 'POST'>
                    
                        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                        <h2>Alterar Curriculo</h2>

                        <div class = 'userBox'>
                            <label for = 'cidadeOrigem'>Cidade de Origem:</label>
                            <br>
                            <input type = 'text' name = 'cidadeOrigem' value = '" . $curriculo['cidadeOrigem'] . "' hidden>
                            <input type = 'text' name = 'cidadeOrigem' value = '" . $curriculo['cidadeOrigem'] . "' disabled>
                            <br>
                        </div>

                        <div class = 'userBox'>
                            <label for = 'estadoOrigem'>Estado de Origem:</label>
                            <br>
                            <input type = 'text' name = 'estadoOrigem' value = '" . $curriculo['estadoOrigem'] . "' hidden>
                            <input type = 'text' name = 'estadoOrigem' value = '" . $curriculo['estadoOrigem'] . "' disabled>
                            <br>
                        </div>

                        <div class = 'userBox'>
                            <br>
                            <label for = 'github'>Github:</label>
                            <br>
                            <input type = 'url' name = 'github' value = '" . $curriculo['github'] . "'>
                            <br>
                        </div>

                        <div class = 'userBox'>
                            <br>
                            <label for = 'linkedIn'>LinkedIn:</label>
                            <br>
                            <input type = 'url' name = 'linkedIn' value = '" . $curriculo['linkedIn'] . "'>
                            <br>
                        </div>
                    
                        <div class = 'userBox'>
                            <br>
                            <label for = 'objetivo'>Objetivo:</label>
                            <br>
                            <input type = 'text' name = 'objetivo' value = '" . $curriculo['objetivo'] . "' maxlength = '200'>
                            <br>
                        </div>

                        <div class = 'userBox'>
                            <br>
                            <label for = 'formacaoAcademica'>Formação Acadêmica:</label>
                            <br>
                            <input type = 'text' name = 'formacaoAcademica' value = '" . $curriculo['formacaoAcademica'] . "' maxlength = '150'>
                            <br>
                        </div>

                        <div class = 'userBox'>
                            <br>
                            <label for = 'expProfissionaisRelevantes'>Experiências Profissionais Relevantes:</label>
                            <br>
                            <input type = 'text' name = 'expProfissionaisRelevantes' value = '" . $curriculo['expProfissionaisRelevantes'] . "' maxlength = '300'>
                            <br>
                        </div>

                        <div class = 'userBox'>
                            <br>
                            <label for = 'especialidade'>Especialidade:</label>
                            <br>
                            <input type = 'text' name = 'especialidade' value = '" . $curriculo['especialidade'] . "' maxlength = '30'>
                            <br>
                        </div>

                        <div class = 'userBox'>
                            <br>
                            <label for = 'cpf'>Seu CPF:</label>
                            <br>
                            <input type = 'text' name = 'cpf' value = '" . $curriculo['cpfFuncionario'] . "' hidden>
                            <input type = 'text' name = 'cpf' value = '" . $curriculo['cpfFuncionario'] . "' disabled>
                            <br>
                        </div>

                        <div class = 'userBox'>
                            <br>
                            <label for = 'curriculoNome'>Nome do Currículo:</label>
                            <br>
                            <input type = 'text' name = 'curriculoNome' value = '" . $curriculo['nome'] . "' hidden>
                            <input type = 'text' name = 'curriculoNome' value = '" . $curriculo['nome'] . "' disabled>
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
                            <a href = '../../Front-end/views/curriculosFuncionario.html' class = 'button' type = 'button'>Voltar</a>
                        </div>

                    </form>

                </div>

            </section>

        </div>

    </body>

</html>";

?>