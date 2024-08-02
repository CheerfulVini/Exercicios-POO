<?php

class Pokemon{
    public $nome;
    public $numero;
    public $tipo;
    public $sexo;
    public $tamanho;
    public $peso;

    public $vida;
    public $velocidade;
    public $ataque;
    public $defesa;
    public $bonusDano = 0;
    public $dano;
    public $experiencia;
    public $nivel;

    public $temFolhada;
    public $temAfiarUnhas;
    public $temAtaqueRapido;
    public $temPlanoMalefico;

    function folhada(){
        return ( ( rand(1,10) + 4 )* ($this -> ataque / 10) ) + $this -> bonusDano;
    }

    function afiarUnhas(){
        $this -> bonusDano = $this -> bonusDano + 10;
    }

    function ataqueRapido(){
        return ( ( rand(1,10) + 4 )* ($this -> ataque / 10) ) + $this -> bonusDano;
    }

    function planoMalefico(){
        $this -> bonusDano = $this -> bonusDano + 10;
    }

    function sobeNivel(){
        $this -> nivel = $this -> nivel + 1;
        $this -> experiencia = 0;
    }

    function __construct($no, $nu, $ti, $se, $ta, $pe, $vi, $ve, $at, $de, $xp = 0, $ni = 0, $fo = false, $af = false, $ar = false, $pm = false) {
        $this->nome = $no;
        $this->numero = $nu;
        $this->tipo = $ti;
        $this->sexo = $se;
        $this->tamanho = $ta;
        $this->peso = $pe;
        $this->vida = $vi;
        $this->velocidade = $ve;
        $this->ataque = $at;
        $this->defesa = $de;
        $this->experiencia = $xp;
        $this->nivel = $ni;
        $this->temFolhada = $fo;
        $this->temAfiarUnhas = $af;
        $this->temAtaqueRapido = $ar;
        $this->temPlanoMalefico = $pm;
    }
}

$sprigatito = new Pokemon("Sprigatito", 906, "Grama", "Fêmea", 0.50, 4.1, 400, 1, 40, 65, 61, 54, true, true);
$pikachu = new Pokemon("Pikachu", 25, "Elétrico", "Macho", 0.45, 6, 400, 1, 35, 90, 55, 40, false, false, true, true);


do {
    $escolha = readline("Escolha seu Pokémon: \n 1. Sprigatito\n 2.Pikachu");
} while ($escolha != 1 && $escolha != 2);

if($escolha == 1) {
    $seuPokemon = $sprigatito;
    $pokemonInimigo = $pikachu;
} else {
    $seuPokemon = $pikachu;
    $pokemonInimigo = $sprigatito;
}

$acao = false;

$pocao = 10;
$pokebola = 10;

while($seuPokemon->vida > 0 && $pokemonInimigo->vida > 0){
    while($acao == false){
        print("Você está lutando contra " . $pokemonInimigo->nome);

        print("\nvida: $seuPokemon->vida\nvida inimigo: $pokemonInimigo->vida");

        print("\n1.Ataques\n2.Itens\n3.Fugir\n");
        $escolha = readline("");

        if ($escolha == 1){
            if($seuPokemon->temFolhada == true && $seuPokemon->temAfiarUnhas == true){
                print("1.Folhada \n2.Afiar Unhas \n3.Voltar \n");
                $escolha = readline("");

                if($escolha == 1){
                    $dano = $seuPokemon->folhada();
                    $pokemonInimigo->vida = $pokemonInimigo->vida - $dano;
                    $acao = true;
                    print("Você deu $dano de dano!\n");
                    sleep(1);
                }

                if($escolha == 2){
                    $seuPokemon->afiarUnhas();
                    $acao = true;
                    print("Seu pokémon está mais forte!");
                    sleep(1);
                }
            }

            if($seuPokemon->temAtaqueRapido == true && $seuPokemon->temPlanoMalefico == true){
                print("1.Ataque Rápido \n2.Plano Maléfico \n3.Voltar \n");
                $escolha = readline("");

                if($escolha == 1){
                    $dano = $seuPokemon->ataqueRapido();
                    $pokemonInimigo->vida = $pokemonInimigo->vida - $dano;
                    $acao = true;
                    print("Você deu $dano de dano!\n");
                    sleep(1);
                }

                if($escolha == 2){
                    $seuPokemon->planoMalefico();
                    $acao = true;
                    print("Seu pokémon está mais forte!");
                    sleep(1);
                }
            }
        }else if($escolha == 2){
            if($pocao > 0){
                print("1.Poção");
            }

            if($pokebola > 0){
                print("2.Pokebola");
            }

            print("3.Voltar");

            $escolha = readline("");

            if($escolha == 1){
                $seuPokemon->vida = $seuPokemon->vida + 10;
                $pocao--;
                $acao = true;
            }
            elseif ($escolha == 2) {
                $pokebola--;
                $acao = true;
                $pegou = rand(1, 100) + $pokemonInimigo->vida;

                if($pegou < 50){
                    print("Você capturou " . $pokemonInimigo->nome . "!");
                    die;
                }else{
                    print($pokemonInimigo->nome . " saiu da pokebola!");
                    sleep(1);
                    $acao = true;
                }
            }
        }elseif($escolha == 3){
            $escapou = rand(1, 100) + $seuPokemon->velocidade;

            if($escapou > 50){
                print("Você escapou!");
                die;
            }else{
                print("Você não escapou!\n");
                $acao = true;
                sleep(1);
            }
        }
    }
    
    sleep(1);

    print("É o turno de " . $pokemonInimigo->nome);
    
    sleep(1);

    if($pokemonInimigo->vida > 200){
        if($pokemonInimigo->temAfiarUnhas == true){
            $pokemonInimigo->afiarUnhas();
            print("\nSprigatito usou Afiar unhas.");
            sleep(1);
        }
        elseif ($pokemonInimigo->temPlanoMalefico == true) {
            $pokemonInimigo->planoMalefico();
            print("\nPikachu usou Plano Maléfico");
            sleep(1);
        }
    }else{
        if($pokemonInimigo->temAtaqueRapido == true){
            $dano = $pokemonInimigo->ataqueRapido();
            $seuPokemon->vida = $seuPokemon->vida - $dano;
            print("\nVocê tomou ". $dano . " de dano! sua vida agora é " . $seuPokemon->vida);
            sleep(1);
        }
        elseif($pokemonInimigo->temFolhada == true){
            $dano = $pokemonInimigo->folhada();
            $seuPokemon->vida = $seuPokemon->vida - $dano;
            print("\nVocê tomou ". $dano . " de dano! sua vida agora é " . $seuPokemon->vida);
            sleep(1);
        }
    }
    $acao = false;
}
