package aula14;

public class Visualizacao {

    //Atributos da Classe
    private Gafanhoto espectador;
    private Video filme;
    
    //Metodo Construtor

    public Visualizacao(Gafanhoto espectador, Video filme) {
        this.espectador = espectador;
        this.filme = filme;
        this.espectador.setTotAssistindo(this.espectador.getTotAssistindo() +1);
        this.filme.setViews(this.filme.getViews() +1);
    }
    
    //Metodos de Acessos e Modificadores
    public Gafanhoto getEspectador() {
        return espectador;
    }
    public void setEspectador(Gafanhoto espectador) {
        this.espectador = espectador;
    }
    public Video getFilme() {
        return filme;
    }
    public void setFilme(Video filme) {
        this.filme = filme;
    }

    @Override
    public String toString() {
        return "Visualizacao{" + "espectador=" + espectador + ", filme=" + filme + '}';
    }
    
    //Metodos da Classe
    public void avaliar(){
        this.filme.setAvaliação(5);
    }
    public void avaliar(int a){
        this.filme.setAvaliação(a);
    }
    public void avaliar(float b){
        int total = 0;
        if(b <= 25){
            total = 3;
        }else if(b <= 50){
            total = 5;
        }else if(b <= 75){
            total = 8;
        }else{
            total = 10;
        }
        this.filme.setAvaliação(total);
    }
}
