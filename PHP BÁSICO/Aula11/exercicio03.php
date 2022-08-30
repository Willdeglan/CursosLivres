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
    
        $a = isset($_GET["inicio"])?$_GET["inicio"]:0;
        $b = isset($_GET["final"])?$_GET["final"]:0;
        $c = isset($_GET["incre"])?$_GET["incre"]:1;
        
        if ($a <> "" && $b <> "" && $c <> "") {
            $d = ($a <= $b)?true:false;

            if($d){
                $e = $a;
                while ($e <= $b) {
                    echo " $e ";
                    $e += $c;
                }
            }else{
                $e = $a;
                while ($e >= $b) {
                    echo " $e ";
                    $e -= $c;
                }
            }
        }else{
            echo "Você não digitou todos os dados requeridos.";
        }
        
    ?>
    <br><br>
    <a class="volta" href="javascript:history.go(-1)">Voltar</a>
</div>
</body>
</html>
 