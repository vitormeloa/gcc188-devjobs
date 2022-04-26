<?php

class Curriculo
{
    private $cidadeOrigem;
    private $estadoOrigem;
    private $github;
    private $linkedIn;
    private $objetivo;
    private $formacaoAcademica;
    private $expProfissionaisRelevantes;
    private $especialidade;
    private $cpf;
    private $curriculoNome;
    
    function __construct($umaCidadeOrigem, $umEstadoOrigem, $umGithub, $umLinkedIn, $umObjetivo, $umaFormacaoAcademica, $umaExpProfissionalRelevante, $umaEspecialidade, $umCpf, $umCurriculoNome)
    {
        $this->cidadeOrigem = $umaCidadeOrigem;
        $this->estadoOrigem = $umEstadoOrigem;
        $this->github = $umGithub;
        $this->linkedIn = $umLinkedIn;
        $this->objetivo = $umObjetivo;
        $this->formacaoAcademica = $umaFormacaoAcademica;
        $this->expProfissionaisRelevantes = $umaExpProfissionalRelevante;
        $this->especialidade = $umaEspecialidade;
        $this->cpf = $umCpf;
        $this->curriculoNome = $umCurriculoNome;
    }

    public function getCidadeOrigem()
    {
        return $this->cidadeOrigem;
    }

    public function getEstadoOrigem()
    {
        return $this->estadoOrigem;
    }

    public function getGithub()
    {
        return $this->github;
    }

    public function getLinkedIn()
    {
        return $this->linkedIn;
    }

    public function getObjetivo()
    {
        return $this->objetivo;
    }

    public function getFormacaoAcademica()
    {
        return $this->formacaoAcademica;
    }
    
    public function getExpProfissionaisRelevantes()
    {
        return $this->expProfissionaisRelevantes;
    }

    public function getEspecialidade()
    {
        return $this->especialidade;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function getCurriculoNome()
    {
        return $this->curriculoNome;
    }
    
}

?>
