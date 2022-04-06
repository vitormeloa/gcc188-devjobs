<?php
 
 class Funcionario extends Usuario
 {
    private $listaCurriculos;

    function__construct($cpf, $nome, $email, $senha, $dataNasc, $telefone, $listaCurriculos)
    {
        parent::__construct($cpf, $nome, $email, $senha, $dataNasc, $telefone);
        $this->listaCurriculos = $listaCurriculos;
    }
    
    public function getListaCurriculos()
    {
		return $this->listaCurriculos;
	}
 }
 
 
 ?>
