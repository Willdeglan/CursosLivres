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
        
        $num = isset($_GET["sd"])?$_GET["sd"]:1;
        
        switch ($num) {
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
                echo "Levanta e vai estudar, pequeno aprendiz.";
                break;
            case 7:
            case 8:
                echo "Hoje pode, pode descançar.";
                break;
            default :
                echo "Dia da semana invalido";
                break;
        }
    
    ?>
    <br><br>
    <a class="volta" href="javascript:history.go(-1)">Voltar</a>
</div>
</body>
</html>
 