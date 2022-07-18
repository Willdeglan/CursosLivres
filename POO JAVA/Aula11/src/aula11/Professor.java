package aula11;

public class Professor extends Pessoa{

    //Atribustos da Classe
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
    
    //Metodos da Classe
    public void receberSalario(){
        System.out.println(this.nome+" professor especialista em "+this.getEspecialidade()+" recebendo o salario mensal.");
    }
}
