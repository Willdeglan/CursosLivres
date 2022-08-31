<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
    
        $leit = "Leite";
        $prec = 8.5;
        
        echo "<p>O $leit custa R$ ". number_format($prec, 2). "</p>";
        
        //printf
        printf("<p>O %s custa R$ %.2f", $leit, $prec."</p>");
        
        /*
        %d para mostrar valores no printf positivos e negativos;
        %u para mostrar valores sem considerar seu sinal;
        %f para mostrar valores reais;
        %s para mostrar strings;
        */
        
        //print_r
        echo "<br><br>";
        $m[0] = 5;
        $m[1] = 3;
        $m[3] = 8;
        $m[4] = 0;
        
        print_r($m);
        echo "<br><br>";
        var_dump($m);
        
        echo "<br><br>";
        $m2 = array(6, 5, 9, 4, 0, 7);
        print_r($m2);
        echo "<br><br>";
        var_export($m2);
        
    ?>
</div>
</body>
</html>
 