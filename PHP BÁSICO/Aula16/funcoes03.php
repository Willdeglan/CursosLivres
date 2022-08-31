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
    
        //strlen(); trim;
        $texto = "<p>Aqui será tabalhado uma função do PHP.</p>";
        
        //echo strlen($texto);
        
        $nome = "   willdeglan gomes   ";
        
        echo strlen($nome);
        $nome1 = trim($nome);
        
        echo "<br>$nome1";
        echo "<br>".strlen(trim($nome));
        
        /*
        trim() elimina espaços vazios no inicio e fim das frases, tanto na direita como na esquerda;
        ltrim() elimina espaços vazios somente na esquerda;
        rtrim() elimina espaços vazios somente da direita;
        */
        
        
    ?>
</div>
</body>
</html>
 