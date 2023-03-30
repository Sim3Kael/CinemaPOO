<?php

//código feito por Bruno José e Kael Bezerra

class Cliente extends Filme
{
  public $idade;
  private $ingresso;
  
  public function __construct($idade, $ingresso) {
   $this->idade = $idade;
   $this->ingresso = $ingresso;
  }
  public function getCliente($classificacao) {
      if ($this->idade >= $classificacao) {
        echo "Você é maior de idade! Pode entrar! \n";
    }
      else {
        echo  "Sinto muito campeão... Mas você não pode entrar... \n";
    }
  }
  
  public function getIngresso(){
    return $this -> ingresso;
  }
}


class Filme
{
  public $nome;
  private $sala;
  public $classificacao;

  public function __construct($nome, $classificacao, $sala)
  {
    $this->nome = $nome;
    $this->classificacao = $classificacao;
    $this->sala = $sala;
  }

  public function entrar($ingresso)
  {
    if ($ingresso === $this->sala) {
      echo "Bem-vindo a sala do filme " . $this->nome;
    } else {
      echo "Opa, sala errada";
    }
  }
}

$idade = 19;
$ingresso = 20;

$nomeDoFilme = "Avatar";
$classificacao = 12;
$sala = 20;


$cliente = new Cliente($idade, $ingresso);
$filme = new Filme($nomeDoFilme, $classificacao ,$sala);

if ($cliente->idade < $filme->classificacao) {
  echo $cliente->getCliente($filme->classificacao);
} else {
  echo $cliente->getCliente($filme->classificacao);
  echo $filme->entrar($cliente->getIngresso());
}
