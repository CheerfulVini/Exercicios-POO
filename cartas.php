<?php

class Carta{
   private $nome;
   private $custoMana;
   private $tipo;
   private $valor;
   private $num;

   function __construct($no, $cm, $ti, $va, $nu){
        $this->nome = $no;
        $this->custoMana = $cm;
        $this->tipo = $ti;
        $this->valor = $va;
        $this->num = $nu;
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
   
   public function getNum()
   {
      return $this->num;
   }

   /**
    * Set the value of valor
    */
   public function setNum($num): self
   {
      $this->num = $num;

      return $this;
   }
}

$cartas[0] = new Carta("Lótus Negra", "0", "artefato", 500000, 1);
$cartas[1] = new Carta("Atraxa, Grande Unificadora", "3gwub", "criatura lendária - pretor", 130, 2);
$cartas[2] = new Carta("Nadu, Sabedoria Alada", "1gu", "criatura lendária - ave mago", 14, 3);
$cartas[3] = new Carta("Sheoldred, o Apocalipse", "2bb", "criatura lendária - phyrexiano pretos" , 430, 4);
$cartas[4] = new Carta("Estudo Rístico", "2u", "encantamento", 219, 5);
$cartas[5] = new Carta("Caminho para o Exílio", "w", "mágica instantânea", 5, 6);
$cartas[6] = new Carta("Anel Solar", "1", "artefato", 5, 7);
$cartas[7] = new Carta("Ato Blásfemo", "8r", "feitiço", 10, 8);

$carta_sorteada = $cartas[array_rand($cartas)];
$adivinha = 0;
$tentativas = 0;

while($adivinha != $carta_sorteada->getNome()){
    $tentativas++;
    print("\nAdivinhe o nome(digite 0 para sair):");
    $adivinha = readline();

    if($carta_sorteada->getNome() == $adivinha){
        print("\nVocê acertou! sua pontuação foi de: " . 100/$tentativas);
    }else if($adivinha == 0){
        die();
    }else if($carta_sorteada->getNome() != $adivinha){
        print("\nVocẽ errou.");

        $adivinha = rand(1, 2);

        if($adivinha == 1){
            print("\nSua dica é: ");
            $adivinha = rand(1, 3);

            switch ($adivinha) {
                case 1:
                    print("\nO custo de mana é: " . $carta_sorteada->getNome());
                break;

                case 2:
                    print("\nO tipo é: " . $carta_sorteada->getTipo());
                break;

                case 3:
                    print("\nO preço na plataforma LigaMagic é: " . $carta_sorteada->getValor());
                break;
            }
        }
    }
}
