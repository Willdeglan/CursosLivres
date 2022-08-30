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
        
        $num = isset($_GET["estad"])?$_GET["estad"]:0;
        
        switch ($num) {
            case 1: case 3: case 4: case 14: case 22: case 23: case 27:
                echo "Estado da Região <span class='foco'>NORTE</span>.";
                break;
            case 2: case 5: case 6: case 10: case 15: case 17: case 18: case 20: case 26:
                echo "Estado da Região <span class='foco'>NORDESTE</span>.";
                break;
            case 7: case 9: case 11: case 12:
                echo "Estado da Região <span class='foco'>CENTRO OESTE</span>.";
                break;
            case 8: case 13: case 19: case 25:
                echo "Estado da Região <span class='foco'>SUDESTE</span>.";
                break;
            case 16: case 21: case 24:
                echo "Estado da Região <span class='foco'>SUL</span>.";
                break;
        }
    
    ?>
    <br><br>
    <a class="volta" href="javascript:history.go(-1)">Voltar</a>
</div>
</body>
</html>
 