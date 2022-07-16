<?php

interface Publicacao {

    public function abrir();
    public function fechar();
    public function folhear($pag);
    public function avannçarPagina();
    public function voltarPagina();
    
}
