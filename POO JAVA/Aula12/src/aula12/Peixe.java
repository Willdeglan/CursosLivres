package aula12;

public class Peixe extends Animal{
    
    //Atributos da Classe
    private String corEscama;
    
    //Metodo Acessor e Modificador
    public String getCorEscama() {
        return corEscama;
    }
    public void setCorEscama(String corEscama) {
        this.corEscama = corEscama;
    }
    
    //Metodo da Classe
    public void soltarBolha(){
        System.out.println("Soltando bolhas na agua ...");
    }

    //Metodos de Sobreposição da Classe Aminal
    @Override
    public void locomover() {
        System.out.println("Nadando ...");
    }
    @Override
    public void alimentar() {
        System.out.println("Comando substancia na agua ...");
    }
    @Override
    public void emitirSom() {
        System.out.println("Peixe nao emite som !!!!");
    }    
    
}
