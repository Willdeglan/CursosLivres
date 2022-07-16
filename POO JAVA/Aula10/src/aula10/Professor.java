package aula10;

public class Professor extends Pessoa{
    
    //Atributos da SubClasse
    private String especialidade;
    private float salario;

    //Metodos Acessores e Modificadores
    public String getEspecialidade() {
        return especialidade;
    }
    public void setEspecialidade(String especialidade) {
        this.especialidade = especialidade;
    }
    public float getSalario() {
        return salario;
    }
    public void setSalario(float salario) {
        this.salario = salario;
    }
    
    //Metodo da SubClasse
    public void receberAumento(float aument){
        this.salario += aument;
    }
}
