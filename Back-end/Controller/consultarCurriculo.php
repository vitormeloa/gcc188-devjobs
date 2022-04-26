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
        <link rel='stylesheet' href='../css/estilo.css'>
    </head>
    
    <body>
        <header id='header'>
            <nav class='container'>
                <a class='logo' href='#'>Dev<span>Jobs</span></a>
            </nav>
        </header>

        <br><br><br>
        
        <form action = '../../Back-end/Controller/consultarCurriculo.php' method = 'POST' autocomplete = 'off'>
            
            <table border='5'>
                <div class='loginBox'>
                    <div class = 'userBox'>
                        <label for = 'curriculoNome'>Digite o nome do Currículo, exatamente igual ao criado no cadastramento, que deseja alterar:</label>
                        <br>
                        <br>
                        <br>
                        <br>

                        <tr>
                            <td>
                                <div class = 'userBox'>
                                    <br>
                                    <label for = 'github'>*Github:</label>
                                    <br>
                                    <input type = 'url' name = 'github' value='" . $curriculo['github'] . "'>
                                    <br>
                                </div>
                            </td>

                            <td>
                                <div class = 'userBox'>
                                    <br>
                                    <label for = 'linkedIn'>*LinkedIn:</label>
                                    <br>
                                    <input type = 'url' name = 'linkedIn' value = '" . $curriculo['linkedIn'] . "'>
                                    <br>
                                </div>
                            </td>

                            <td>
                                <div class = 'userBox'>
                                    <br>
                                    <label for = 'especialidade'>Especialidade:</label>
                                    <br>
                                    <input type = 'text' name = 'especialidade' maxlength = '30' value = '" . $curriculo['especialidade'] . "'>
                                    <br>
                                </div>
                            </td>

                            <td>
                                <div class = 'userBox'>
                                    <br>
                                    <label for = 'expProfissionaisRelevantes'>Experiências Profissionais Relevantes:</label>
                                    <br>
                                    <input type = 'text' name = 'expProfissionaisRelevantes' maxlength = '300' value = '" . $curriculo['expProfissionaisRelevantes'] . "'>
                                    <br>
                                </div>
                            </td>

                            <td>
                                <div class = 'userBox'>
                                    <br>
                                    <label for = 'objetivo'>*Objetivo:</label>
                                    <br>
                                    <input type = 'text' name = 'objetivo' maxlength = '200' value = '" . $curriculo['objetivo'] . "'>
                                    <br>
                                </div>
                            </td>

                            <td>
                                <div class = 'userBox'>
                                    <br>
                                    <label for = 'formacaoAcademica'>*Formação Acadêmica:</label>
                                    <br>
                                    <input type = 'text' name = 'formacaoAcademica' maxlength = '150' value = '" . $curriculo['formacaoAcademica'] . "'>
                                    <br>
                                </div>
                            </td>

                            <td>
                                <div class = 'userBox'>
                                    <br>
                                    <label for = 'especialidade'>Especialidade:</label>
                                    <br>
                                    <input type = 'text' name = 'especialidade' maxlength = '30' value = '" . $curriculo['especialidade'] . "'>
                                    <br>
                                </div>
                            </td>
                        </tr>
                        <br>
                    </div>

                <div class = 'userBox'>
                    <br>
                    <button class = 'button' type = 'submit'>Confirmar</button>
                </div>

                </div>
        </table>
        </form>

    </body>

</html>";

?>