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
        
        //strtolower() mostra todas as palavra ou frase em minuscula;
        $nome = "WillDegLan GomeS";
        
        echo "Seu nome é ". strtolower($nome)."<br><br>";
        
        //strtoupper() mostra todas as palavras ou frases em maiusculas;
        $nome2 = "willdeglan gomes";
        echo "Seu nome é ". strtoupper($nome2)."<br><br>";
        
        //ucfirst() mostra a primeira letra da palavra ou frase maiuscula;
        $nome3 = "willdeglan gOMES";
        echo "Seu nome é ". ucfirst($nome3)."<br><br>";
        
        //ucwords() mostra a primeira letra de todas as palavra em maiuscula;
        $nome3 = "willdeglan gOMES";
        echo "Seu nome é ". ucwords($nome3)."<br><br>";
        
        //strrev() mostra na tela a palavra ou frase reverso;
        $nome4 = "Willdeglan Gomes";
        echo "Seu nome invertido é ". strrev($nome4)."<br><br>";
        
        //strpos() verifica a posição da palavra ou levra diferenciando maiuscula e minuscula requerina na frase;
        //stripos() verifica ignorando se a string é ou não maiuscula;
        $nome5 = "Willdeglan Gomes";
        echo "$nome5 <br>A string OM foi encontrado na posição ". strpos($nome5, "om");
        
        //substr_count() busca na frase ou palavra um tipo especifico definido;
        $nome6 = "Eu estou estudando PHP pelo Curso em Video do Professor Guanabara";
        echo "<br><br>$nome6<br>A string Cur foi encontrado ". substr_count($nome6, "Cur")." vezes";
        
        //substr() ela mostra uma string da frase descrita a contar inicial pela primeiro parâmetro ate o segundo parâmentro;
        $nome7 = "Curso de PHP para iniciantes";
        echo "<br><br>".substr($nome7, 9, 5);
        
        //str_pad() é usado para posicionar a string dentro de uma vetor com parâmetros de preenchimentos;
        $nome8 = "Willdeglan";
        echo "<br><br>". str_pad($nome8, 30,"#", 2);
        
        //str_repeat() gera uma quantidade de vezes de um tipo especifico definido;
        echo "<br><br>". str_repeat("willdeglan", 5);
        
        //str_replace()
        $nome9 = "Eu adoro linguagem de programação.";
        echo "<br><br>$nome9<br>". str_replace("adoro", "não gosto de", $nome9);
        
    ?>
</div>
</body>
</html>
 