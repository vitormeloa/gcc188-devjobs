<?php

class Job
{
    private $jobNome;
    private $qtdVagas;
    private $descricao;
    private $requisitos;
    private $beneficios;
    private $salario;
    private $remoto;
    private $cpfContratante;
    
    function __construct($umJobNome, $umaQtdVagas, $umaDescricao, $umRequisitos, $umBeneficios, $umSalario, $umRemoto, $umCpfContratante)
    {
        $this->jobNome = $umJobNome;
        $this->qtdVagas = $umaQtdVagas;
        $this->descricao = $umaDescricao;
        $this->requisitos = $umRequisitos;
        $this->beneficios = $umBeneficios;
        $this->salario = $umSalario;
        $this->remoto = $umRemoto;
        $this->cpfContratante = $umCpfContratante;
    }

    public function getJobNome()
    {
        return $this->jobNome;
    }

    public function getQtdVagas()
    {
        return $this->qtdVagas;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function getRequisitos()
    {
        return $this->requisitos;
    }

    public function getBeneficios()
    {
        return $this->beneficios;
    }

    public function getSalario()
    {
        return $this->salario;
    }
    
    public function getRemoto()
    {
        return $this->remoto;
    }

    public function getCpfContratante()
    {
        return $this->cpfContratante;
    }
}

?>