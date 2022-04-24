<?php

class CurriculoDAO
{
    function __construct(){}

    function cadastrarCurriculo($curriculo, $connection)
    {
        $inserirCurriculo = "INSERT INTO Curriculo(cidadeOrigem, estadoOrigem, github, linkedIn, objetivo, formacaoAcademica, expProfissionaisRelevantes, especialidade, cpfFuncionario, nome) VALUES ('" . $curriculo->getCidadeOrigem() . "','" . $curriculo->getEstadoOrigem() . "','" . $curriculo->getGithub() . "','" . $curriculo->getLinkedIn() . "','" . $curriculo->getObjetivo() . "','" . $curriculo->getFormacaoAcademica() . "','" . $curriculo->getExpProfissionaisRelevantes() . "','" . $curriculo->getEspecialidade() . "','" . $curriculo->getCpf() . "','" . $curriculo->getCurriculoNome() . "')";

        if($connection->query($inserirCurriculo) == TRUE)
        {
            echo "Curriculo inserido com sucesso!";
            header("Location: ../../Front-end/views/curriculosFuncionario.html");
        }
        else
        {
            echo "Erro no cadastramento: " . $connection->error;
            header("Location: ../../Front-end/views/cadastrarCurriculo.html");
        }
    }

    function excluirCurriculo($curriculoNome, $connection)
    {
        $excluirCurriculo = "DELETE FROM Curriculo WHERE nome = '" . $curriculoNome . "'";

        if($connection->query($excluirCurriculo) == TRUE)
        {
            echo "Curriculo excluído com sucesso!";
            header("Location: ../../Front-end/views/curriculosFuncionario.html");
        }
        else
        {
            echo "Erro na Exclusao: " . $connection->error;
            header("Location: ../../Front-end/views/curriculosFuncionario.html");
        }
    }

    function alterarCurriculo($curriculo, $connection)
    {
        $alterarUsuario = "UPDATE Curriculo SET github = '" . $curriculo->getGithub() . "', linkedIn = '" . $curriculo->getLinkedIn() . "', objetivo = '" . $curriculo->getObjetivo() . "', formacaoAcademica = '" . $curriculo->getFormacaoAcademica() . "', expProfissionaisRelevantes = '" . $curriculo->getExpProfissionaisRelevantes() . "', especialidade = '" . $curriculo->getEspecialidade() . "' WHERE nome = '" . $curriculo->getCurriculoNome() . "'";
        return $connection->query($alterarUsuario);
    }

    function consultarCurriculo($curriculoNome, $connection)
    {
        $consultarCurriculo = "SELECT * FROM Curriculo WHERE nome = '" . $curriculoNome . "'";
        $curriculo = $connection->query($consultarCurriculo);
        return $curriculo;
    }

    function consultarTodosCurriculos($cpf, $connection)
    {
        $consultarCurriculos = "SELECT * FROM Curriculo WHERE cpfFuncionario = '" . $cpf . "'";
        $curriculos = $connection->query($consultarCurriculos);
        return $curriculos;
    }
}

?>