package aula12;

public class Reptil extends Animal{
    
    //Atributos da Classe
    private String corEscama;
    
    //Metodo Acessor e Modificador
    public String getCorEscama() {
        return corEscama;
    }
    public void setCorEscama(String corEscama) {
        this.corEscama = corEscama;
    }

    //Metodos de Sobreposição da Classe Aminal
    @Override
    public void locomover() {
        System.out.println("Rastejando ...");
    }
    @Override
    public void alimentar() {
        System.out.println("Comendo vegetais ...");
    }
    @Override
    public void emitirSom() {
        System.out.println("Emitindo som de Reptil.");
    }    
    
}
