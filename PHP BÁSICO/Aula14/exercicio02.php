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
            return $a + $b;
        }
        
        $s = soma(5, 6);
        echo "A soma é $s<br>";
        $s = soma(10, 5);
        print "A soma é $s<br>";
        
        echo "A soma é ".soma(1, 2)."<br>";
        
        print "A soma é ". soma(9, 1);
        
    ?>
</div>
</body>
</html>
 