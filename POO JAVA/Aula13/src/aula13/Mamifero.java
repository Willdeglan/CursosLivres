package aula13;

public class Mamifero extends Animal{

    //Atributo da Classe
    protected String corPelo;
    
    //Metodo Acesso e Modificador
    public String getCorPelo() {
        return corPelo;
    }
    public void setCorPelo(String corPelo) {
        this.corPelo = corPelo;
    }
    
    //Metodo de Sobreporsição da Classe Animal
    @Override
    public void emitirSom() {
        System.out.println("Emitindo som de mamifero ...");
    }
    
}
