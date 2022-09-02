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
    
        //Funções que facilitam muito quando se utiliza vetores;
        
        //print_r() usado para mostrar um vetor;
        $m = array(5, 8, 9, 0, 6);
        print_r($m);
        
        //var_dump() também usado para mostrar vetor com a quantidades de elementos;
        var_dump($m);
        
        //count() é usado mapra mostrar a quantidade de elementos de um vetor;
        echo "<br>O vetor tem ".count($m)." elementos.";
        
        //Função array_puch() coloca um elemento no final do vetor;
        echo "<br><br>";
        array_push($m, 25);
        print_r($m);
        
        //Função array_pop() elimina o ultimo elemento de um vetor;
        array_pop($m);
        echo "<br><br>";
        print_r($m);
        
        //Função array_unshift() cria um elemento no inicio de um vetor com o valot definido;
        array_unshift($m, 23);
        echo "<br><br>";
        print_r($m);
        
        //array_shift() elimina um elemento no inicio de um vetor;
        array_shift($m);
        print_r($m);
        
        //Função sort() usado para colocar um vetor em ordem;
        sort($m);
        print_r($m);
        
        //Função rsort() usado para colocar um vertor em ordem inversa;
        rsort($m);
        print_r($m);
        
        //Função asort() usado para colocar um vetor em ordem mantendo seus indices associativos do vetor;
        asort($m);
        print_r($m);
        
        //Função arsort() usado para colocar os elementos em ordem inversa com seus indices associativos do vetor;
        arsort($m);
        print_r($m);
        
        //Função ksort() usado para ordenar os indices de um vetor carregando seu valor associado;
        ksort($m);
        print_r($m);
        
        //Função krsort() usado para colocar os indices em ordem inversa carregando seu valor associado;
        krsort($m);
        print_r($m);
        
    ?>
    </pre>
</div>
</body>
</html>
 