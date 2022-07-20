package aula13;

abstract class Animal {

    //Atributos da Classe
    protected float peso;
    protected int idade;
    protected int membro;
    
    //Metodo Acessores e Modificadores
    public float getPeso() {
        return peso;
    }
    public void setPeso(float peso) {
        this.peso = peso;
    }
    public int getIdade() {
        return idade;
    }
    public void setIdade(int idade) {
        this.idade = idade;
    }
    public int getMembro() {
        return membro;
    }
    public void setMembro(int membro) {
        this.membro = membro;
    }
    
    //Metodo da Classe
    public abstract void emitirSom();
}
