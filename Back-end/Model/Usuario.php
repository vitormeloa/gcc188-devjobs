<?php

class Usuario
{
    private $cpf;
    private $nome;
    private $email;
    private $senha;
    private $dataNasc;
    private $telefone;
    private $funcionarioOrContratante;
    
    function __construct($umCpf, $umNome, $umEmail, $umaSenha, $umaDataNasc, $umTelefone, $umFuncionarioOrContratante)
    {
        $this->cpf = $umCpf;
        $this->nome = $umNome;
        $this->email = $umEmail;
        $this->senha = $umaSenha;
        $this->dataNasc = $umaDataNasc;
        $this->telefone = $umTelefone;
        $this->funcionarioOrContratante = $umFuncionarioOrContratante;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function getDataNasc()
    {
        return $this->dataNasc;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }
    
    public function getFuncionarioOrContratante()
    {
        return $this->funcionarioOrContratante;
    }
    
}





?>
