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
        
        $v = isset($_GET["prim"])?$_GET["prim"]:1;
        $val = 0;
        
        print "Verificando o número  <span class='foco'>$v</span><br>";
        echo "Valores Multiplos: ";
        for($i = 1; $i <= $v; $i++){
            if($v % $i == 0){
                echo "  <span class='foco'>$i</span>  ";
                $val++;
            }
        }
        print "<br>Total de Multiplos:   <span class='foco'>$val</span><br>O número $v: ";
        if($val == 2){
            print " <span class='foco'>é PRIMO</span>";
        } else {
            echo " <span class='foco'>não é PRIMO</span>";
        }
        
    ?>
    <p><a class="volta" href="javascript:history.go(-1)">Voltar</a></p>
</div>
</body>
</html>
 