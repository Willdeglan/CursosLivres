<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 06 - Encapsulamento</title>
    </head>
    <body>
        <pre>
        <h1>Projeto Controle Remoto</h1>
        <?php
            require_once './ControleRemoto.php';
        
            $c1 = new ControleRemoto();
        
            $c1->desligar();
            $c1->maisVolume();
        
            
            $c1->abrirMenur();
        ?>
        </pre>
    </body>
</html>
