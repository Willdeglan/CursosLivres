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
    
        function soma(){
            $v = func_get_args();
            $m = func_num_args();
            $s = 0;
            
            for($i = 0; $i < $m; $i++){
                $s += $v[$i];
            }
            
            return $s;
        }
        
        echo "A soma é ".soma(4, 5, 5, 10, 4, 30);
        
    ?>
</div>
</body>
</html>
 