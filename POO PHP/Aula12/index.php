<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 12 - PoliMorfismo</title>
    </head>
    <body>
        <pre>
        <?php
        
        require_once 'Mamifero.php';
        require_once 'Ave.php';
        require_once 'Peixe.php';
        require_once 'Reptil.php';
        require_once 'Canguru.php';
        require_once 'Cachorro.php';
        require_once 'Cobra.php';
        require_once 'Tartaruga.php';
        require_once 'Goldfish.php';
        require_once 'Arara.php';
        
        $ma = new Mamifero();
        $ma->setPeso(2);
        $ma->setMembro(4);
        $ma->setIdade(1);
        $ma->setCorPelo("amarelo");
        $ma->alimentar();
        $ma->emitirSom();
        $ma->locomover();
        print_r($ma);
        
        $av = new Ave();
        $av->setPeso(0.5);
        $av->setMembro(4);
        $av->setIdade(1);
        $av->setCorPena("cinza");
        $av->alimentar();
        $av->emitirSom();
        $av->locomover();
        print_r($av);
        
        $pe = new Peixe();
        $pe->setPeso(1);
        $pe->setMembro(0);
        $pe->setIdade(1);
        $pe->setCorEscama("Preta");
        $pe->alimentar();
        $pe->emitirSom();
        $pe->locomover();
        print_r($pe);
        
        $re = new Reptil();
        $re->setPeso(1);
        $re->setMembro(4);
        $re->setIdade(2);
        $re->setCorEscama("Marrom");
        $re->alimentar();
        $re->emitirSom();
        $re->locomover();
        print_r($re);
        
        $can = new Canguru();
        $can->setPeso(50);
        $can->setMembro(4);
        $can->setCorPelo("Cinza");
        $can->setIdade(5);
        $can->alimentar();
        $can->emitirSom();
        $can->locomover();
        $can->usarBolsa();
        print_r($can);
        
        $cac = new Cachorro();
        $cac->setPeso(5);
        $cac->setIdade(10);
        $cac->setMembro(4);
        $cac->setCorPelo("Amarelo");
        $cac->alimentar();
        $cac->emitirSom();
        $cac->locomover();
        $cac->abanandoRabo();
        $cac->enterrarOsso();
        print_r($cac);
        
        $cob = new Cobra();
        $cob->setPeso(1);
        $cob->setIdade(3);
        $cob->setMembro(0);
        $cob->setCorEscama("Amarelo");
        $cob->alimentar();
        $cob->emitirSom();
        $cob->locomover();
        print_r($cob);
        
        $tar = new Tartaruga();
        $tar->setPeso(4);
        $tar->setIdade(15);
        $tar->setMembro(4);
        $tar->setCorEscama("Preto");
        $tar->alimentar();
        $tar->emitirSom();
        $tar->locomover();
        print_r($tar);
        
        $ara = new Arara();
        $ara->setPeso(1);
        $ara->setIdade(12);
        $ara->setMembro(4);
        $ara->setCorPena("Colorida");
        $ara->alimentar();
        $ara->emitirSom();
        $ara->locomover();
        print_r($ara);
        
        $pei = new Goldfish();
        $pei->setPeso(1);
        $pei->setIdade(1);
        $pei->setMembro(0);
        $pei->setCorEscama("Amarelo Ouro");
        $pei->alimentar();
        $pei->emitirSom();
        $pei->locomover();
        $pei->soltandoBolha();
        print_r($pei);
        
        ?>
        </pre>
    </body>
</html>
