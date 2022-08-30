<!DOCTYPE html>
<html>
<head>
    <style>
        div span{
            font-size: 18pt;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bolder;
            color: red;
        }
    </style>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
    
        $n1 = isset($_GET["nota1"])?$_GET["nota1"]:0.0;
        $n2 = isset($_GET["nota2"])?$_GET["nota2"]:0.0;
        $media = ($n1 + $n2)/2;
        $situacao;
        
        if($media < 5){
            $situacao = " REPROVADO.";
        }elseif ($media >= 5 && $media < 7) {
            $situacao = " RECUPERAÇÃO.";
        } else {
            $situacao = " APROVADO";
        }
        
        echo "A média ente as notas <span>&nbsp;$n1&nbsp;</span> e <span>&nbsp;$n2&nbsp;</span> é <span>&nbsp;$media</span>.";
        echo "<br><br>Situação do Aluno: <span>$situacao</span>";
        
    ?>
    <br><br>
    <a class="volta" href="exercicio02.html">Voltar</a>
</div>
</body>
</html>
 