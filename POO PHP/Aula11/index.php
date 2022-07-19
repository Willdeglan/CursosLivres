<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 11 - Heranla</title>
    </head>
    <body>
        <pre>
        <?php

        require_once 'Visitante.php';
        require_once 'Aluno.php';
        require_once 'Professor.php';
        require_once 'Bolsista.php';
        require_once 'Tecnico.php';
        
        $vis = new Visitante();
        $vis->setNome("Will");
        $vis->setIdade(17);
        $vis->setSexo("M");
        print_r($vis);
        
        $alu = new Aluno();
        $alu->setNome("Maria");
        $alu->setIdade(15);
        $alu->setCurso("Informatica");
        $alu->setSexo("F");
        $alu->setMatricula(12345);
        print_r($alu);
        $alu->pagarMensalidade();
        
        $pro = new Professor();
        $pro->setNome("Paulo");
        $pro->setIdade(65);
        $pro->setSexo("M");
        $pro->setEspecialização("Analise de Sistema");
        $pro->setSalario(12032);
        $pro->receberSalario(12312);
        print_r($pro);
        
        $tec = new Tecnico();
        $tec->setNome("Joao");
        $tec->setIdade(26);
        $tec->setSexo("M");
        $tec->setCurso("Computacao");
        $tec->setMatricula(23652);
        $tec->setRegistroProficiopnal(10210);
        print_r($tec);
        $tec->pagarMensalidade();
        $tec->praticar();
        
        $bol = new Bolsista();
        $bol->setNome("Leide");
        $bol->setIdade(30);
        $bol->setBolsa(512);
        $bol->setCurso("Computação");
        $bol->setSexo("F");
        $bol->setMatricula(45213);
        print_r($bol);
        $bol->pagarMensalidade();
        
        ?>
        </pre>
    </body>
</html>
