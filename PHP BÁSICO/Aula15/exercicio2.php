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
    
        //Parametro passado por referência
        function soma(&$a){
            $a += 5;
            echo "<p>A soma do número mais 5 é $a</p>";
        }
        
        $m = 3;
        print "<p>A variável antes foi $m</p>";
        soma($m);
        print "<p>A variável depois foi $m</p>";
        
    ?>
</div>
</body>
</html>
 