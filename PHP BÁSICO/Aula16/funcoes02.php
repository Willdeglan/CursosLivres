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
    
        //wordwrap
        $texto = "<p>Aqui será tabalhado uma função do PHP chamada de wordwrap.</p>";
        
        echo wordwrap($texto);
        echo wordwrap($texto, 20);
        echo wordwrap($texto, 10, "<br>");
        echo wordwrap($texto, 6,"<br>\n", false);
        echo wordwrap($texto, 6, "<br>\n", true);
        
    ?>
</div>
</body>
</html>
 