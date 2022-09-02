<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <pre>
    <?php
    
        //Aula 18 sobre vetores no PHP;
        //Declaração simples;
        $v[0] = 5;
        $v[1] = 9;
        $v[2] = 0;
        $v[3] = 4;
        
        print_r($v);
        echo "<br><br>";
        
        //Declaração em array();
        $m = array(5, 9, 0, 4);
        print_r($m);
        echo "<br><br>";
        
        //Declaração por meio do range() onde cria um vetor que começa no 1º parâmetro e vai ate o 2º parâmetro com passo igual igual ao 3º parâmetro;
        $n = range(2, 30, 4);
        print_r($n);
        echo "<br><br>";
        
        //Estrutura foreach() mostra a mesma estrutura acima com os valores do vetor criado;
        foreach ($n as $v){
            echo "$v  ";
        }
        echo "<br><br>";
        
        //Cria um vetor com Índeces pessonalizados;
        $b = array(0 => 9, 1 => 10, 2 => 2, 3 => 0);
        print_r($b);
        $b = array(2 => 9, 10 => 10, 7 => 2, 5 => 0);
        print_r($b);
        $b = array(2 => 9, 10 => 10, 7 => 2, 5 => 0);
        $b[] = 50;
        print_r($b);
        //Função unset() elimina um valor do vetor com índece definido;
        $b = array(2 => 9, 10 => 10, 7 => 2, 5 => 0);
        unset($b[7]);
        print_r($b);
        //Índeces pessonalizados;
        $p = array("nome" => "Willdeglan", "idade" => 38, "sexo" => "Masc", "estuda" => true);
        print_r($p);
        echo "<br>";
        foreach ($p as $campo => $valor){
            echo "$campo, ";
        }
        echo "<br>";
        foreach ($p as $campo => $valor){
            echo "$valor, ";
        }
        
        //Matrix ou vetores dentro de outro vetor; 
        echo "<br><br>";
        $t = array(array(5, 8), array(3, 4), array(6, 0));
        print_r($t);
        echo $t[1][0]."<br>";
        echo $t[2][1]."<br>";
        echo $t[0][0]."<br>";
        print_r($t[2][0]);
        $t[2][0] = 43;
        echo "<br>";
        print_r($t);
        
    ?>
    </pre>
</div>
</body>
</html>
 