<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 13 - PoliMorfismo</title>
    </head>
    <body>
        <pre>
        <?php

            require_once 'Mamifero.php';
            require_once 'Lobo.php';
            require_once 'Cachorro.php';
            
            $ma = new Mamifero();
            $ma->emitirSom();
            
            $lo = new Lobo();
            $lo->emitirSom();
            
            $ca = new Cachorro();
            $ca->emitirSom();
            $ca->reagirDono(true);
            $ca->reagirFrase("oi");
            $ca->reagirHoraMin(11, 30);
            $ca->reagirHoraMin(15, 10);
            $ca->reagirHoraMin(20, 00);
            $ca->reagirIdadePeso(2, 2);
            $ca->reagirIdadePeso(6, 4);
            
        ?>
        </pre>
    </body>
</html>
