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
        
        $num = isset($_GET["numb"])?$_GET["numb"]:0;
        $op = isset($_GET["oper"])?$_GET["oper"]:1;
        
        switch ($op) {
            case 1:
                $result = $num * 2;
                break;
            case 2:
                $result = pow($num, 3);
                break;
            case 3:
                $result = number_format(sqrt($num), 2);
                break;
            case 4:
                $result = pow($num, 2);
                break;
        }
        echo "O resultado da operação é $result.";
    
    ?>
    <br><br>
    <a class="volta" href="exercicio01.html">Voltar</a>
</div>
</body>
</html>
 