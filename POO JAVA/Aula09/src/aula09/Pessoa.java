package aula09;

public class Pessoa {
    
    //Atributos da Classe
    private String nome;
    private int idade;
    private String sexo;
    
    //Metodo Construtor

    public Pessoa(String nome, int idade, String sexo) {
        this.nome = nome;
        this.idade = idade;
        this.sexo = sexo;
    }
    
    //Metodos Acessores e Modificadores da Classe
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
    public void fazerAniver(){
        this.idade++;
    }
}
