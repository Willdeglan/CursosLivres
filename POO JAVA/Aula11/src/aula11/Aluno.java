package aula11;

public class Aluno extends Pessoa{

    //Atributos da Classe
    private int matricula;
    private String curso;

    //Metodos Acessores e Modificadores
    public int getMatricula() {
        return matricula;
    }
    public void setMatricula(int matricula) {
        this.matricula = matricula;
    }
    public String getCurso() {
        return curso;
    }
    public void setCurso(String curso) {
        this.curso = curso;
    }
    
    //Metodo da Classe
    public void pagarMensalidade(){
        System.out.println("Pagando a Mensalidade do Aluno "+this.nome);
    }
    
}
