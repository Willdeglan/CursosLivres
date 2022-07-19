<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 10 - Herança</title>
    </head>
    <body>
        <pre>
        <?php
        
        require_once 'Pessoa.php';
        require_once 'Aluno.php';
        require_once 'Professor.php';
        require_once 'Funcionario.php';
        
        $pes = new Pessoa();
        $alu = new Aluno();
        $prof = new Professor();
        $func =new Funcionario();
        
        $pes->setNome("will");
        $alu->setNome("leide");
        $prof->setNome("Paula");
        $func->setNome("Maria");
        
        $pes->setIdade(20);
        $prof->setIdade(45);
        $alu->setIdade(12);
        $func->setIdade(30);
        
        $pes->setSexo("M");
        $prof->setSexo("F");
        $func->setSexo("F");
        $alu->setSexo("F");
        
        $alu->setCurso("Computacao");
        $alu->setMatricula(102030);
        
        $prof->setEspecialidade("Banco de Dados");
        $prof->setSalario(10452);
        
        $func->setSetor("Almoxarifado");
        $func->setTrabalhando(true);
        
        print_r($pes);
        print_r($alu);
        print_r($prof);
        print_r($func);
        
        $alu->cancelarMatricula();
        
        $prof->receberAumento(1000);
        print_r($prof);
        
        $func->mudarTrabalho();
        print_r($func);
        
        ?>
        </pre>
    </body>
</html>
