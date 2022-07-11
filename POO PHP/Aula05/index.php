<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 05 - Conta de Banco</title>
    </head>
    <body>
        <pre>
        <?php
            require_once './Banco.php';
            
            $p1 = new Banco();  //will
            $p2 = new Banco();  //leide
            
            $p1->abrirConta("CC");
            $p1->setNumConta(1234);
            $p1->setDono("Will");
            $p1->depositar(300);
            $p1->pagarMensalidade();
            $p1->fecharConta();
            
            $p2->abrirConta("CP");
            $p2->setNumConta(4321);
            $p2->setDono("Leide");
            $p2->depositar(500);
            $p2->sacar(200);
            $p2->pagarMensalidade();
            $p2->fecharConta();
            
            print_r($p1);
            print_r($p2);
             
        ?>
        </pre>
    </body>
</html>
