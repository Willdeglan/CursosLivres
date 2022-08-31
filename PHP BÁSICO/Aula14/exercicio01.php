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
    
        function soma($a, $b){
            $s = $a + $b;
            print "<p>A soma de $a mais $b é $s</p>";
        }
        
        soma(5, 6);
        soma(10, 5);
        soma(1, 2);
        soma(9, 1);
        
    ?>
</div>
</body>
</html>
 