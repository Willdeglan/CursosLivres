package aula11;

public class Aula11 {

    public static void main(String[] args) {

        Visitante vis = new Visitante();
        
        vis.setNome("will");
        vis.setIdade(25);
        vis.setSexo("M");
        vis.setNome("Leide");
        vis.setIdade(20);
        vis.setSexo("F");
        
        Aluno alu = new Aluno();
        alu.setNome("Willdeglan");
        alu.setIdade(26);
        alu.setSexo("M");
        alu.setCurso("Computação");
        alu.setMatricula(1020);
        alu.pagarMensalidade();
        
        Bolsista bol = new Bolsista();
        bol.nome = "Gomes";
        bol.setIdade(16);
        bol.setSexo("M");
        bol.setCurso("Computação");
        bol.setBolsa(550.5f);
        bol.setMatricula(2030);
        bol.pagarMensalidade();
        
        Professor prof = new Professor();
        prof.nome = "Silva";
        prof.setEspecialidade("Banco de Dados");
        prof.setIdade(45);
        prof.setSalario(8600f);
        prof.setSexo("M");
        prof.receberSalario();
        
        Tecnico tec = new Tecnico();
        tec.nome = "Leide";
        tec.setIdade(15);
        tec.setSexo("F");
        tec.setRegistro(501);
        tec.setCurso("Informatica");
        tec.praticar();
        System.out.println(tec.toString());
    }
    
}
