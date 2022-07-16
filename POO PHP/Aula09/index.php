<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 09 - Atividade Pratica</title>
    </head>
    <body>
        <pre>
        <?php
        
        require_once 'Pessoa.php';
        require_once 'Livro.php';
        
        $pes[0] = new Pessoa("Will", 25, "M");
        $pes[1] = new Pessoa("Leide", 20, "F");
        $pes[2] = new Pessoa("Paty", 17, "F");
        
        $liv[0] = new Livro("Programar em POO PHP", "Guanabara", 325, $pes[1]);
        $liv[1] = new Livro("Programação em POO Java", "Gustavo", 450, $pes[0]);
        $liv[2] = new Livro("Logica de Programar", "Hilp25", 351, $pes[2]);
        $liv[3] = new Livro("Logica dos Codigos", "Deglan", 615, $pes[1]);
        
        
        
        print_r($liv[0]);
        
        $liv[0]->abrir();
        
        $liv[0]->detalhes();
        
        $liv[0]->avannçarPagina();
        
        $liv[0]->detalhes();
        
        $liv[0]->folhear(50);
        
        $liv[0]->detalhes();
        
        ?>
        </pre>
    </body>
</html>
