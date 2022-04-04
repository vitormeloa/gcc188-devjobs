<?php

abstract class Connection
{
    private $cpf;
    private $nome;
    private $email;
    private $senha;
    private $dataNasc;
    private $telefone;
    
    function__construct($cpf, $nome, $email, $senha, $dataNasc, $telefone)
    {
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
        $this->dataNasc = $dataNasc;
        $this->telefone = $telefone;
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
    
    
    
}





?>