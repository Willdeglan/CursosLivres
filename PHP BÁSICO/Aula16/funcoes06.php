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
    
        //chr() mostra qual caracter estar posicionado no valor definido;
        //ord() mostra qual a posição ordinal do caracter dificido;
        
        $letra = chr(60);
        echo "A letra de código 60 é $letra<br><br>";
        
        $posi = ord("g");
        echo "A letra g está na posição $posi";
    
    ?>
</div>
</body>
</html>
 