<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>AULA07 - ULTRA EMOJI COMBAT</title>
    </head>
    <body>
        <pre>
        <?php
        
        require_once './Lutador.php';
        require_once './Luta.php';
        
        $l = array();
        
        $l[0] = new Lutador("Pretty Boy", "França", 31, 1.75, 68.9, 11, 2, 1);
        $l[1] = new Lutador("Putscrip", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
        $l[2] = new Lutador("Dear Code", "EUA", 35, 1.65, 80.9, 12, 2, 1);
        $l[3] = new Lutador("SnapShadown", "Australia", 28, 1.95, 81.6, 13, 0, 2);
        $l[4] = new Lutador("Ufocobol", "Mexico", 37, 1.70, 119.3, 5, 4, 3);
        $l[5] = new Lutador("Nerdaart", "Japao", 30, 1.81, 105.7, 12, 2, 4);
        
        
        //$l[4]->ganharLuta();
        //$l[4]->apresentar();
        //$l[4]->status();
        
        //$l[1]->apresentar();
        //$l[1]->empatar();
        //$l[1]->status();
        
        //$l[3]->ganharLuta();
        //$l[3]->apresentar();
        //$l[3]->status();
        
        $UEC01 = new Luta();
        
        $UEC01->marcarLuta($l[1],$l[0]);
        $UEC01->lutar();
        $l[0]->status();
        $l[1]->status();
        
        ?>
        </pre>
    </body>
</html>
