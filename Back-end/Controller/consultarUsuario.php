<?php

include_once '../Persistence/Connection.php';
include_once '../Model/Usuario.php';
include_once '../Persistence/UsuarioDAO.php';
include_once '../Persistence/ContratanteDAO.php';

$cpf = $_POST['cpf'];

$connection = new Connection();
$connection = $connection->getConnection();

$usuarioDAO = new UsuarioDAO();
$user = $usuarioDAO->consultarUsuario($cpf, $connection);

$contratanteDAO = new ContratanteDAO();
$contratante = $contratanteDAO->consultarContratante($cpf, $connection);

$contratante = $contratante->fetch_assoc();
$user = $user->fetch_assoc();
if($user['funcionarioOrContratante'] == 'F')
{
    echo "<!DOCTYPE html>

    <html lang='pt-BR'>

        <head>
            <meta charset='UTF-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Perfil|DevJobs</title>
            <link rel = 'stylesheet' href = '../../Front-end/css/estilo.css'>
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

                        <form action = 'alterarFuncionario.php' method = 'POST'>
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
                            <h2>Perfil</h2>

                            <div class = 'userBox'>
                                <label for = 'cpf'>CPF:</label>
                                <br>
                                <input type = 'text' name = 'cpf' value = '" . $user['cpf'] . "' pattern = '\d{3}\.?\d{3}\.?\d{3}-?\d{2}' hidden>
                                <input type = 'text' name = 'cpf' value = '" . $user['cpf'] . "' pattern = '\d{3}\.?\d{3}\.?\d{3}-?\d{2}' disabled>
                                <br>
                            </div>

                            <div class = 'userBox'>
                                <label for = 'nome'>Nome Completo:</label>
                                <br>
                                <input type = 'text' name = 'nome' value = '" . $user['nome'] . "' hidden>
                                <input type = 'text' name = 'nome' value = '" . $user['nome'] . "' disabled>
                                <br>
                            </div>

                            <div class = 'userBox'>
                                <br>
                                <label for = 'email'>Email:</label>
                                <br>
                                <input type = 'email' name = 'email' value = '" . $user['email'] . "' hidden>
                                <input type = 'email' name = 'email' value = '" . $user['email'] . "' disabled>
                                <br>
                            </div>

                            <div class = 'userBox'>
                                <br>
                                <label for = 'senha'>Senha:</label>
                                <br>
                                <input type = 'password' name = 'senha' value = '" . $user['senha'] . "' hidden>
                                <input type = 'password' name = 'senha' value = '" . $user['senha'] . "' disabled>
                                <br>
                            </div>
                            
                            <div class = 'userBox'>
                                <br>
                                <label for = 'telefone'>Telefone:</label>
                                <br>
                                <input type='phone' name = 'telefone' value = '" . $user['telefone'] . "' hidden>
                                <input type='phone' name = 'telefone' value = '" . $user['telefone'] . "' disabled>
                                <br>
                            </div>

                            <div class = 'userBox'>
                                <br>
                                <label for = 'dataNasc'>Data de Nascimento:</label>
                                <br>
                                <input type = 'date' name = 'dataNasc' value = '" . $user['dataNasc'] . "' hidden>
                                <input type = 'date' name = 'dataNasc' value = '" . $user['dataNasc'] . "' disabled>
                                <br>
                            </div>

                            <div class = 'userBox'>
                                <br>
                                <button class='button' type='submit'>Alterar Dados</button>
                                <br>
                                <a href = '../../Front-end/views/excluirUsuario.html' class = 'button' type = 'button'>Excluir Conta</a>
                            </div>

                            <div class = 'userBox'>
                                <br>
                                <a href = '../../Front-end/views/paginaInicialFuncionario.html' class='button' type='button'>Voltar</a>
                                <br>
                            </div>

                        </form>

                    </div>

                </section>

            </div>

        </body>

    </html>";
}
else
{
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

                        <form action = 'alterarContratante.php' method = 'POST'>
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
                            <h2>Perfil</h2>

                            <div class = 'userBox'>
                                <label for = 'cpf'>CPF:</label>
                                <br>
                                <input type = 'text' name = 'cpf' value = '" . $user['cpf'] . "' pattern = '\d{3}\.?\d{3}\.?\d{3}-?\d{2}' hidden>
                                <input type = 'text' name = 'cpf' value = '" . $user['cpf'] . "' pattern = '\d{3}\.?\d{3}\.?\d{3}-?\d{2}' disabled>
                                <br>
                            </div>

                            <div class = 'userBox'>
                                <label for = 'nome'>Nome Completo:</label>
                                <br>
                                <input type = 'text' name = 'nome' value = '" . $user['nome'] . "' hidden>
                                <input type = 'text' name = 'nome' value = '" . $user['nome'] . "' disabled>
                                <br>
                            </div>

                            <div class = 'userBox'>
                                <br>
                                <label for = 'email'>Email:</label>
                                <br>
                                <input type = 'email' name = 'email' value = '" . $user['email'] . "' hidden>
                                <input type = 'email' name = 'email' value = '" . $user['email'] . "' disabled>
                                <br>
                            </div>

                            <div class = 'userBox'>
                                <br>
                                <label for = 'senha'>Senha:</label>
                                <br>
                                <input type = 'password' name = 'senha' value = '" . $user['senha'] . "' hidden>
                                <input type = 'password' name = 'senha' value = '" . $user['senha'] . "' disabled>
                                <br>
                            </div>
                            
                            <div class = 'userBox'>
                                <br>
                                <label for = 'telefone'>Telefone:</label>
                                <br>
                                <input type='phone' name = 'telefone' value = '" . $user['telefone'] . "' hidden>
                                <input type='phone' name = 'telefone' value = '" . $user['telefone'] . "' disabled>
                                <br>
                            </div>

                            <div class = 'userBox'>
                                <br>
                                <label for = 'dataNasc'>Data de Nascimento:</label>
                                <br>
                                <input type = 'date' name = 'dataNasc' value = '" . $user['dataNasc'] . "' hidden>
                                <input type = 'date' name = 'dataNasc' value = '" . $user['dataNasc'] . "' disabled>
                                <br>
                            </div>

                            <div class = 'userBox'>
                                <br>
                                <label for = 'nomeEmpresa'>Nome da sua Empresa:</label>
                                <br>
                                <input type = 'text' name = 'nomeEmpresa' value = '" . $contratante['nomeEmpresa'] . "' hidden>
                                <input type = 'text' name = 'nomeEmpresa' value = '" . $contratante['nomeEmpresa'] . "' disabled>
                                <br>
                            </div>

                            <div class = 'userBox'>
                                <br>
                                <label for = 'cnpj'>CNPJ da Empresa:</label>
                                <br>
                                <input type = 'text' name = 'cnpj' value = '" . $contratante['CNPJ'] . "' pattern = '\d{2}\.?\d{3}\.?\d{3}/?\d{4}-?\d{2}' hidden>
                                <input type = 'text' name = 'cnpj' value = '" . $contratante['CNPJ'] . "' pattern = '\d{2}\.?\d{3}\.?\d{3}/?\d{4}-?\d{2}' disabled>
                                <br>
                            </div>

                            <div class = 'userBox'>
                                <br>
                                <label for = 'dataAberturaEmpresa'>Data de Abertura da Empresa:</label>
                                <br>
                                <input type = 'date' name = 'dataAberturaEmpresa' value = '" . $contratante['dataAberturaEmpresa'] . "' hidden>
                                <input type = 'date' name = 'dataAberturaEmpresa' value = '" . $contratante['dataAberturaEmpresa'] . "' disabled>
                                <br>
                            </div>

                            <div class = 'userBox'>
                                <br>
                                <button class = 'button' type = 'submit'>Alterar Dados</button>
                                <br>
                                <a href = '../../Front-end/views/excluirUsuario.html' class = 'button' type = 'button'>Excluir Conta</a>
                            </div>

                            <div class = 'userBox'>
                                <br>
                                <a href = '../../Front-end/views/paginaInicialContratante.html' class = 'button' type = 'button'>Voltar</a>
                            </div>

                        </form>

                    </div>

                </section>

            </div>

        </body>

    </html>";
}

?>