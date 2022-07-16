<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 08 - Lutadores</title>
    </head>
    <body>
        <pre>
        <?php

            require_once 'Lutador.php';
            require_once 'Luta.php';
            
            $m = array();

            $m[0] = new Lutador("Will", "Brasil", 25, 1.69, 65.5, 2, 1, 3);
            $m[1] = new Lutador("Paulo", "japao", 30, 1.67, 69, 4, 2, 1);
            $m[2] = new Lutador("Joao", "França", 31, 1.67, 84.4, 6, 3, 7);
            $m[3] = new Lutador("Martins", "Espanha", 34, 1.72, 78.9, 1, 4, 2);
            $m[4] = new Lutador("Berto", "Rucia", 26, 1.75, 92.1, 2, 4, 4);
            $m[5] = new Lutador("Carlos", "EUA", 36, 1.85, 100.5, 4, 1, 2);
            $m[6] = new Lutador("Nando", "Alemanha", 33, 1.87, 109.5, 3, 4, 3);
            $m[7] = new Lutador("Tiago", "Mexico", 37, 1.91, 107.8, 3, 4, 6);
            
            $l = new Luta();
            
            $l->marcarLuta($m[2], $m[3]);
            $l->lutar();
            $l->getDesafiante()->status();
            $l->getDesafiado()->status();
        ?>
        </pre>
    </body>
</html>
