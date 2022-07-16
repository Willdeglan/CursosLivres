package aula10;

public class Aluno extends Pessoa{

    //Atributos da SubClasse
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
    
    //Metodo da SubClasse
    public void cancelarMatricula(){
        System.out.println("Maticula sera concelada agora !!!");
    }
}
