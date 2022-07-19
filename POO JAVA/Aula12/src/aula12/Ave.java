package aula12;

public class Ave extends Animal{

    //Atributo da Classe
    private String corPena;
    
    //Metodo Acessor e Modificador
    public String getCorPena() {
        return corPena;
    }
    public void setCorPena(String corPena) {
        this.corPena = corPena;
    }
    
    //Metodo da Classe
    public void fazerNinho(){
        System.out.println("Fazendo ninho na arvore."); 
    }
    
    //Metodos de Sobreposição da Classe Animal
    @Override
    public void locomover() {
        System.out.println("Voando alto ...");
    }
    @Override
    public void alimentar() {
        System.out.println("Comendo graos no chao ...");
    }
    @Override
    public void emitirSom() {
        System.out.println("Piando muito ...");
    }    
}
