package aula11;

public abstract class Pessoa {
    
    //Atributos da Classe
    protected String nome;
    private int idade;
    private String sexo;

    //Metodos Acessores e Modificadores
    public String getNome() {
        return nome;
    }
    public void setNome(String nome) {
        this.nome = nome;
    }
    public int getIdade() {
        return idade;
    }
    public void setIdade(int idade) {
        this.idade = idade;
    }
    public String getSexo() {
        return sexo;
    }
    public void setSexo(String sexo) {
        this.sexo = sexo;
    }
    
    //Metodo da Classe
    public void fazerAniversario(){
        this.idade++;
    }

    @Override
    public String toString() {
        return "Dados{" + "nome=" + nome + ", idade=" + idade + ", sexo=" + sexo + '}';
    }
    
}
