package aula10;

public class Aula10 {

    public static void main(String[] args) {

       Pessoa p1 = new Pessoa();
       Aluno p2 = new Aluno();
       Professor p3 = new Professor();
       Funcionario p4 = new Funcionario();
       
       p1.setNome("Will");
       p2.setNome("Leide");
       p3.setNome("Paty");
       p4.setNome("paulo");
       
       p1.setIdade(25);
       p2.setIdade(20);
       p3.setIdade(24);
       p4.setIdade(23);
       
       p1.setSexo("M");
       p2.setSexo("F");
       p3.setSexo("F");
       p4.setSexo("M");
       
       p2.setCurso("Pegagogia");
       p3.setSalario(5236.40f);
       p4.setSetor("Limpesa");
       
       System.out.println(p1.toString());
       System.out.println(p2.toString());
       System.out.println(p3.toString());
       System.out.println(p4.toString());
       
    }
    
}
