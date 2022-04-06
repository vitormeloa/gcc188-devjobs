<?php
 
class Funcionario extends Usuario
{
  private $listaCurriculos;

  function __construct($umCpf, $umNome, $umEmail, $umaSenha, $umaDataNasc, $umTelefone, $umaListaCurriculos)
  {
    parent::__construct($umCpf, $umNome, $umEmail, $umaSenha, $umaDataNasc, $umTelefone);
    $this->listaCurriculos = $umaListaCurriculos;
  }
    
  public function getListaCurriculos()
  {
		return $this->listaCurriculos;
  }
}
 
 
?>
