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
    
        //explode() cria um vetor de palavras da string definida sendo separadas pelo limitador especifico;
        //str_split() cria um vetor com todos os caracteres da string definida;
        //implode() vai unir palavras da string para a formação de uma frase com a concaternação do caracter definido;
        //join() faz exatamente a mesma coisa que a função implode();
    
        $texto = "Eu sou programador PHP";
        $v = explode(" ", $texto);
        print_r($v);
        
        echo "<br><br>";
        $texto2 = "willdeglan";
        $m = str_split($texto2);
        print_r($m);
        
        echo "<br><br>";
        $n[0] = "willdeglan";
        $n[1] = "estuda";
        $n[2] = "computação";
        $p = implode(" ", $n);
        echo $p;
        
    ?>
</div>
</body>
</html>
 