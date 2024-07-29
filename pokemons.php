<?php

class pokemon{
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
    public $experiencia;
    public $nivel;

    public $temFolhada;
    public $temAfiarUnhas;
    public $temAtaqueRapido;
    public $temPlanoMalefico;

    function folhada($dano){
        return ( ( rand(1,10) + 4 )* ($this -> ataque / 10) ) + $this -> bonusDano;
    }

    function afiarUnhas($bonus){
        $this -> bonusDano = $this -> bonusDano + 10;
    }

    function ataqueRapido($dano){
        return ( ( rand(1,10) + 4 )* ($this -> ataque / 10) ) + $this -> bonusDano;
    }

    function planoMalefico($bonus){
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

$sprigatito = new pokemon("Sprigatito", 906, "Grama", "Fêmea", 0.50, 4.1, 0, 1, 40, 65, 61, 54, true, true);
$pikachu = new pokemon("Pikachu", 25, "Elétrico", "Macho", 0.45, 6, 0, 1, 35, 90, 55, 40, false, false, true, true);
