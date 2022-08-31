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
    
        //str_word_cont();
        $texto = "<p>Eu estou estudando funcoes no PHP</p>";
        
        echo str_word_count($texto, 0);
        echo "<br><br.";
        print_r(array(str_word_count($texto, 1)));
        echo "<br><br.";
        print_r(array(str_word_count($texto, 2)));
        
    ?>
</div>
</body>
</html>
 