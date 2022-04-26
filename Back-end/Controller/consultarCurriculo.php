<?php

include_once '../Persistence/Connection.php';
include_once '../Persistence/CurriculoDAO.php';

$curriculoNome = $_POST['curriculoNome'];

$connection = new Connection();
$connection = $connection->getConnection();

$curriculoDAO = new CurriculoDAO();
$curriculo = $curriculoDAO->consultarCurriculo($curriculoNome, $connection);

$curriculo = $curriculo->fetch_assoc();
echo
"<!DOCTYPE html>

<html lang='pt-BR'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Currículo</title>
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

                <div class = 'curriculoBox'>

                    <section class = 'section'>

                        <div class = 'container grid'>

                            <form action = 'alterarCurriculo.php' method = 'POST' autocomplete='off'>

                                <br>
                                <h1>Alterar Currículo</h1>
                                <br>
                                
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
                                    <input type = 'url' name = 'github' placeholder = 'Entre com o link do seu perfil' value = '" . $curriculo['github'] . "'>
                                    <br>
                                </div>

                                <div class = 'userBox'>
                                    <br>
                                    <label for = 'linkedIn'>LinkedIn:</label>
                                    <br>
                                    <input type = 'url' name = 'linkedIn' placeholder = 'Entre com o link do seu perfil' value = '" . $curriculo['linkedIn'] . "'>
                                    <br>
                                </div>
                            
                                <div class = 'userBox'>
                                    <br>
                                    <label for = 'objetivo'>Objetivo:</label>
                                    <br>
                                    <input type = 'textarea' name = 'objetivo' maxlength = '200' value = '" . $curriculo['objetivo'] . "'>
                                    <br>
                                </div>

                                <div class = 'userBox'>
                                    <br>
                                    <label for = 'formacaoAcademica'>Formação Acadêmica:</label>
                                    <br>
                                    <input type = 'textarea' name = 'formacaoAcademica' maxlength = '150' value = '" . $curriculo['formacaoAcademica'] . "'>
                                    <br>
                                </div>

                                <div class = 'userBox'>
                                    <br>
                                    <label for = 'expProfissionaisRelevantes'>Experiências Profissionais Relevantes:</label>
                                    <br>
                                    <input type = 'textarea' name = 'expProfissionaisRelevantes' maxlength = '300' value = '" . $curriculo['expProfissionaisRelevantes'] . "'>
                                    <br>
                                </div>

                                <div class = 'userBox'>
                                    <br>
                                    <label for = 'especialidade'>Especialidade:</label>
                                    <br>
                                    <input type = 'textarea' name = 'especialidade' maxlength = '30' value = '" . $curriculo['especialidade'] . "'>
                                    <br>
                                </div>

                                <div class = 'userBox'>
                                    <br>
                                    <label for = 'curriculoNome'>Nome do Currículo:</label>
                                    <br>
                                    <input type = 'text' name = 'curriculoNome' value = '" . $curriculo['curriculoNome'] . "' hidden>
                                    <input type = 'text' name = 'curriculoNome' value = '" . $curriculo['curriculoNome'] . "' disabled>
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
                
            </div>

        </main>

    </body>

</html>";

?>