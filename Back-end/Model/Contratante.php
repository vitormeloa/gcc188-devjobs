<?php

include_once 'Usuario.php';

class Contratante extends Usuario
{
    private $nomeEmpresa;
    private $cnpj;
    private $dataAberturaEmpresa;

    function __construct($umCpf, $umNome, $umEmail, $umaSenha, $umaDataNasc, $umTelefone, $umNomeEmpresa, $umCnpj, $umaDataAberturaEmpresa)
    {
        parent::__construct($umCpf, $umNome, $umEmail, $umaSenha, $umaDataNasc, $umTelefone, 'C');
        $this->nomeEmpresa = $umNomeEmpresa;
        $this->cnpj = $umCnpj;
        $this->dataAberturaEmpresa = $umaDataAberturaEmpresa;
    }

    public function getNomeEmpresa()
    {
        return $this->nomeEmpresa;
    }

    public function getCnpj()
    {
        return $this->cnpj;
    }

    public function getDataAberturaEmpresa()
    {
        return $this->dataAberturaEmpresa;
    }
}

?>
 
