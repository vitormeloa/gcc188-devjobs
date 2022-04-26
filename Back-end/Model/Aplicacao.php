<?php

class Aplicacao
{
    private $data;
    private $hora;
    private $curriculoNome;
    private $motivo;
    private $situacao;
    private $jobNome;
    private $cpfFuncionario;
    private $cpfContratante;
    private $aplicacaoNome;
    
    function __construct($umCurriculoNome, $umMotivo, $umJobNome, $umCpfFuncionario, $umCpfContratante, $umaAplicacaoNome)
    {
        $this->data = date("Y/m/d");
        $this->hora = date("H:i:s");
        $this->curriculoNome = $umCurriculoNome;
        $this->motivo = $umMotivo;
        $this->situacao = "Pendente";
        $this->jobNome = $umJobNome;
        $this->cpfFuncionario = $umCpfFuncionario;
        $this->cpfContratante = $umCpfContratante;
        $this->aplicacaoNome = $umaAplicacaoNome;
    }

    public function getData()
    {
        return $this->data;
    }

    public function getHora()
    {
        return $this->hora;
    }

    public function getMotivo()
    {
        return $this->motivo;
    }

    public function getSituacao()
    {
        return $this->situacao;
    }

    public function getCurriculoNome()
    {
        return $this->curriculoNome;
    }

    public function getJobNome()
    {
        return $this->jobNome;
    }
    
    public function getCpfFuncionario()
    {
        return $this->cpfFuncionario;
    }

    public function getCpfContratante()
    {
        return $this->cpfContratante;
    }

    public function getAplicacaoNome()
    {
        return $this->aplicacaoNome;
    }
    
    public function setSituacao($situacao)
    {
        $this->situacao = $situacao;
    }

}

?>
