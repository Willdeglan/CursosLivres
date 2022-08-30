<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $valore = $_GET["v"];
        $raiz = sqrt($valore);
        echo "O valor recebido é $valore";
        echo "<br>e a raiz quadrada é ". number_format($raiz, 2);
    ?>
    <br><br>
    <a class="volta" href="01exercicio.html">voltar</a>
</div>
</body>
</html>
 