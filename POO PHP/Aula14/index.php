<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 14 - PoliMorfismo</title>
    </head>
    <body>
        <pre>
        <?php
        
        require_once 'Video.php';
        require_once 'Gafanhoto.php';
        require_once 'Visualizacao.php';
        
        $vid[0] = new Video("Programa em POO Java");
        $vid[1] = new Video("Programa em POO PHP");
        $vid[2] = new Video("Tag HTML 5");
        
        $gaf[0] = new Gafanhoto("Will", 22, "M", "12345");
        $gaf[1] = new Gafanhoto("Leide", 20, "F", "abcde");
        $gaf[2] = new Gafanhoto("Paulo", 31, "M", "1023");
        $gaf[3] = new Gafanhoto("Julia", 43, "F", "4020");
        
        $vis[0] = new Visualizacao($gaf[2], $vid[2]); //Paulo ver HTML 5
        $vis[1] = new Visualizacao($gaf[1], $vid[0]); //Paulo ver POO Java
        
        $vis[0]->avaliar1();
        $vis[1]->avaliar1();
        $vis[0]->avaliar2(8);
        $vis[1]->avaliar2(6);
        $vis[0]->avaliar3(30);
        $vis[1]->avaliar3(45);
        
        print_r($vid[0]);
        print_r($vid[1]);
        print_r($vid[2]);
        
        print_r($gaf[0]);
        print_r($gaf[1]);
        print_r($gaf[2]);
        
        print_r($vis);
        
        
        ?>
        </pre>
    </body>
</html>
