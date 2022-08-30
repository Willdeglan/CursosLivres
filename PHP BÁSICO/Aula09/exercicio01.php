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
        
        $a = isset($_GET["nasc"])?$_GET["nasc"]:1900;
        
        $idade = date("Y") - $a;
        
        echo "Você nasceu no ano de $a e tem $idade ano.<br>";
        
        if($idade < 16){
            $votar = "Não Vota";
            $dirigir = "Não Dirigi";
        }elseif (($idade >=16 && $idade < 18) or ($idade > 65)){
            $votar = "Voto Facultativo";
            $dirigir = "Não Dirigi";
        }else{
            $votar = "Voto Obrigatorio";
            $dirigir = "Dirigi";
        }
        
        echo "Com essa idade você pode: <br>".$votar." e ".$dirigir;
    ?>
    <br><br>
    <a class="volta" href="exercicio01.html">Voltar</a>
</div>
</body>
</html>
 