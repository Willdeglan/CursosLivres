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
    
    $v = isset($_GET["tabuada"])?$_GET["tabuada"]:1;
    
    echo "<h3>Tabuada de Multiplicação do Número $v</h3>";
    
    $i=1;
    do{
        echo "$v  x  $i  =  ".($v*$i)."<br>";
        $i++;
    }while ($i <= 10);
        
    ?>
    
    <p><a class="volta" href="javascript:history.go(-1)">Voltar</a></p>
</div>
</body>
</html>
 