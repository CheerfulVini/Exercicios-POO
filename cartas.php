<?php

class Carta{
   private $nome;
   private $custoMana;
   private $tipo;
   private $valor;

   function __construct($no, $cm, $ti, $va){
        $this->nome = $no;
        $this->custoMana = $cm;
        $this->tipo = $ti;
        $this->valor = $va;
   }

   

   /**
    * Get the value of nome
    */
   public function getNome()
   {
      return $this->nome;
   }

   /**
    * Set the value of nome
    */
   public function setNome($nome): self
   {
      $this->nome = $nome;

      return $this;
   }

   /**
    * Get the value of custoMana
    */
   public function getCustoMana()
   {
      return $this->custoMana;
   }

   /**
    * Set the value of custoMana
    */
   public function setCustoMana($custoMana): self
   {
      $this->custoMana = $custoMana;

      return $this;
   }

   /**
    * Get the value of tipo
    */
   public function getTipo()
   {
      return $this->tipo;
   }

   /**
    * Set the value of tipo
    */
   public function setTipo($tipo): self
   {
      $this->tipo = $tipo;

      return $this;
   }

   /**
    * Get the value of valor
    */
   public function getValor()
   {
      return $this->valor;
   }

   /**
    * Set the value of valor
    */
   public function setValor($valor): self
   {
      $this->valor = $valor;

      return $this;
   }
}

$blackLotus = new Carta("Lótus Negra", "0", "artefato", 500000);
$atraxa = new Carta("Atraxa, Grande Unificadora", "3gwub", "criatura lendária - pretor", 130);
$nadu = new Carta("Nadu, Sabedoria Alada", "1gu", "criatura lendária - ave mago", 14);
$sheoldred = new Carta("Sheoldred, o Apocalipse", "2bb", "criatura lendária - phyrexiano pretos" , 430);
$estudoRistico = new Carta("Estudo Rístico", "2u", "encantamento", 219);
$path = new Carta("Caminho para o Exílio", "w", "mágica instantânea", 5);
$solRing = new Carta("Anel Solar", "1", "artefato", 5);
