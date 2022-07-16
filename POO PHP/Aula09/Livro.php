<?php
require_once 'Pessoa.php';
require_once 'Publicacao.php';

class Livro implements Publicacao{

    //Atributos da Classe
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;
    
    //Metodo Construtor
    public function __construct($titulo, $autor, $totPaginas, $leitor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->pagAtual = 0;
        $this->aberto = false;
        $this->leitor = $leitor;
    }

    //Metodos Acessores e Modificadores
    public function getTitulo() {
        return $this->titulo;
    }
    public function getAutor() {
        return $this->autor;
    }
    public function getTotPaginas() {
        return $this->totPaginas;
    }
    public function getPagAtual() {
        return $this->pagAtual;
    }
    public function getAberto() {
        return $this->aberto;
    }
    public function getLeitor(): Pessoa {
        return $this->leitor;
    }
    public function setTitulo($titulo): void {
        $this->titulo = $titulo;
    }
    public function setAutor($autor): void {
        $this->autor = $autor;
    }
    public function setTotPaginas($totPaginas): void {
        $this->totPaginas = $totPaginas;
    }
    public function setPagAtual($pagAtual): void {
        $this->pagAtual = $pagAtual;
    }
    public function setAberto($aberto): void {
        $this->aberto = $aberto;
    }
    public function setLeitor(Pessoa $leitor): void {
        $this->leitor = $leitor;
    }

    //Metodos da Classe
    public function detalhes() {
        echo "<br><br>====  Livro  ====";
        echo "<br>Titulo: ".$this->titulo;
        echo "<br>Autor: ".$this->autor;
        echo "<br>Total de Paginas: ".$this->totPaginas;
        echo "<br>Pagina Atual: ".$this->pagAtual;
        echo "<br>Livro Aberto: ".$this->aberto;
        echo "<br>Leitor: ".$this->leitor->getNome();
        echo "<br>Idade: ".$this->leitor->getIdade();
        echo "<br>Sexo: ".$this->leitor->getSexo();
    }

    //Metodos Implementados
    public function abrir() {
        $this->aberto = true;
    }
    public function avannçarPagina() {
        if($this->pagAtual++ > $this->totPaginas){
            echo "Erro! Fim de paginas do livro";
        } else {
            $this->pagAtual++;
        }
    }
    public function fechar() {
        $this->aberto = false;
    }
    public function folhear($pag) {
        if ($pag > $this->getTotPaginas()){
            $this->pagAtual = 0;
            echo "Erro! Paginas do livro insuficiente";
        } else {
            $this->setPagAtual($pag);
        }
    }
    public function voltarPagina() {
        if($this->pagAtual-- < 1){
            echo "Erro! Livro Fechado";
        } else {
            $this->pagAtual--;
        }
    }
    
}
