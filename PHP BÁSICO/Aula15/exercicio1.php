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
    
        //Parametro passado por valor
        function soma($a){
            $s = $a + 5;
            echo "<p>A soma do número mais 5 é $s</p>";
        }
        
        $m = 3;
        print "<p>A variavel passada foi $m</p>";
        soma($m);
        
    ?>
</div>
</body>
</html>
 