<?php

class Tecnico extends Aluno{

    //Atributos da Classe
    private $registroProficiopnal;
    
    //Metodos Acessores e Modificadores
    public function getRegistroProficiopnal() {
        return $this->registroProficiopnal;
    }
    public function setRegistroProficiopnal($registroProficiopnal): void {
        $this->registroProficiopnal = $registroProficiopnal;
    }

    //Metodos da Classe
    public function praticar() {
        echo "<p>Praticando atividade do Curso.</p>";
    }
}
