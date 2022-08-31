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
    
        include_once 'funcoes.php';
        
        $result = multiplica(3, 5);
        print "<p>A resultado da multiplicação foi  ".$result."</p>";
        
        $result = somaMuitos(5, 4, 3, 2, 1);
        echo "<p>A soma de todos os valores foi $result</p>";
        
        $result = soma(4, 9);
        print "<p>A soma dos dois valores ficaram  $result</p>";
        
        $result = divide(15, 3);
        echo "<p>A divisão dos dois valores foi $result</p>";
        
    ?>
</div>
</body>
</html>
 