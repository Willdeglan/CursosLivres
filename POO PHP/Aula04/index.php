<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            require_once './Caneta.php';

            $c1 = new Caneta("will", "Azull", 1.5);
            $c2 = new Caneta("will", "preto", 0.3);
            //$c1->modelo = "Bic cristal";
            //$c1->setPonta(0.5);
            
            //print_r($c1);

            //print "Eu tenho uma caneta do tipo {$c1->getModelo()} de ponta {$c1->getPonta()}"
        
            print_r($c1);
            print_r($c2);
            
        ?>
        </pre>
    </body>
</html>
