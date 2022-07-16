package aula10;

public class Pessoa {

    //Atributos da SuperClasse
    private String nome;
    private int idade;
    private String sexo;
    
    //Metodos Acessores e Modificadores
    public String getNome(){    
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

    //Metodos da Classe
    public void fazerAniversario() {
        this.idade++;
    }

    @Override
    public String toString() {
        return "Pessoa{" + "nome=" + nome + ", idade=" + idade + ", sexo=" + sexo + '}';
    }
    
}
