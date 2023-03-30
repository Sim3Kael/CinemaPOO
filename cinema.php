<?php

class Cliente
{
  protected $Ingresso;

  public function __construct($Ingresso)
  {
    $this->Ingresso = $Ingresso;
  }

  public function getIngresso()
  {
    return $this->Ingresso;
  }
}


class Filme
{
  private $nome;
  private $sala;

  public function __construct($nome, $sala)
  {
    $this->nome = $nome;
    $this->sala = $sala;
  }

  public function entrar($Ingresso)
  {
    if ($Ingresso === $this->sala) {
      echo "Bem-vindo a sala do filme " . $this->nome . "\n";
    } else {
      echo "Opa, sala errada \n";
    }
  }
}



$cliente = new Cliente(20);
$filme = new Filme("Avatar", 20);
echo $filme->entrar($cliente->getIngresso());
