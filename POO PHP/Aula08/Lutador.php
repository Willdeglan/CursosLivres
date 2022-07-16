<?php

class Lutador {

    //Atributos da Classe
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;
    
    //Metodo Construtor
    public function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates) {
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->setPeso($peso);
        $this->vitorias = $vitorias;
        $this->derrotas = $derrotas;
        $this->empates = $empates;
    }

    //Metodos Acessores e Modificadores
    public function getNome() {
        return $this->nome;
    }
    public function getNacionalidade() {
        return $this->nacionalidade;
    }
    public function getIdade() {
        return $this->idade;
    }
    public function getAltura() {
        return $this->altura;
    }
    public function getPeso() {
        return $this->peso;
    }
    public function getCategoria() {
        return $this->categoria;
    }
    public function getVitorias() {
        return $this->vitorias;
    }
    public function getDerrotas() {
        return $this->derrotas;
    }
    public function getEmpates() {
        return $this->empates;
    }
    public function setNome($nome): void {
        $this->nome = $nome;
    }
    public function setNacionalidade($nacionalidade): void {
        $this->nacionalidade = $nacionalidade;
    }
    public function setIdade($idade): void {
        $this->idade = $idade;
    }
    public function setAltura($altura): void {
        $this->altura = $altura;
    }
    public function setPeso($peso): void {
        $this->peso = $peso;
        if($this->peso < 50){
            echo "Peso muito Baixo, lutador sem categoria";
        }elseif ($this->peso >=50 && $this->peso < 70) {
            $this->categoria = "Peso Pena";
        }elseif ($this->peso >= 70 && $this->peso < 90) {
            $this->categoria = "Peso leve";
        }elseif ($this->peso >=90 && $this->peso < 110) {
            $this->categoria = "Peso Medio";
        }elseif ($this->peso >=110 && $this->peso < 130) {
            $this->categoria = "Peso Pesado";
        } else {
            echo "Peso muito Alto, lutador sem categoria";
        }
    }
    public function setCategoria($categoria): void {
        $this->categoria = $categoria;
    }
    public function setVitorias($vitorias): void {
        $this->vitorias = $vitorias;
    }
    public function setDerrotas($derrotas): void {
        $this->derrotas = $derrotas;
    }
    public function setEmpates($empates): void {
        $this->empates = $empates;
    }

    //Metodos da classe
    public function apresentar() {
        echo "<br>*=*=*=*=*=*=*=*=*=*=*=*=*=*";
        echo "<br> = Nome: ".$this->nome;
        echo "<br> = Pais: ".$this->nacionalidade;
        echo "<br> = Idade: ".$this->idade;
        echo "<br> = Altura: ".$this->altura;
        echo "<br> = Peso: ".$this->peso;
        echo "<br> = Categoria: ".$this->categoria;
        echo "<br> = Vitorias: ".$this->vitorias;
        echo "<br> = Derrotas: ".$this->derrotas;
        echo "<br> = Empates: ".$this->empates;
    }
    public function status() {
        echo "<br>==================";
        echo "<br>Nome: ".$this->nome;
        echo "<br>Pais: ".$this->nacionalidade;
        echo "<br>Vitorias: ".$this->vitorias;
        echo "<br>Derrotas: ".$this->derrotas;
        echo "<br>Empates: ".$this->empates;
    }
    public function ganharLuta() {
        $this->vitorias++;
    }
    public function perderLuta() {
        $this->derrotas++;
    }
    public function empatarLuta() {
        $this->empates++;
    }
}
