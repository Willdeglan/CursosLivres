package aula06;

public class ControleRemoto implements Controlador{

    private int volume;
    private boolean ligado;
    private boolean tocando;

    //Metodos especiais construtores
    public ControleRemoto() {
        this.volume = 50;
        this.ligado = true;
        this.tocando = false;
    }
    //Metodos especiais acessores
    private int getVolume() {
        return volume;
    }
    private void setVolume(int volume) {
        this.volume = volume;
    }
    private boolean getLigado() {
        return ligado;
    }
    private void setLigado(boolean ligado) {
        this.ligado = ligado;
    }
    private boolean getTocando() {
        return tocando;
    }
    private void setTocando(boolean tocando) {
        this.tocando = tocando;
    }
    
    //Metodos abstratos
    @Override
    public void ligar() {
        this.setLigado(true);
    }
    @Override
    public void desligar() {
        this.setLigado(false);
    }
    @Override
    public void abrirMenur() {
        System.out.println("------ Menu ------");
        System.out.println("Esta ligado? "+this.getLigado());
        System.out.println("Esta tocando? "+this.getTocando());
        System.out.print("Volume: "+this.getVolume());
        for(int i=0; i <= this.getVolume(); i +=10){
            System.out.print("[]");
        }
        System.out.println(" ");
    }
    @Override
    public void fecharMenur() {
        System.out.println("Fechando Menu ...");
    }
    @Override
    public void maisVolume() {
        if(this.getLigado()){
            this.setVolume(this.getVolume() + 5);
        } else{
            System.out.println("Impossivel aumentar volume.");
        }
    }
    @Override
    public void menosVolume() {
        if(this.getLigado()){
            this.setVolume(this.getVolume() - 5);
        } else{
            System.out.println("Impossivel abaixar volume.");
        }
    }
    @Override
    public void ligarMudo() {
        if(this.getLigado() && this.getVolume()>0){
            this.setVolume(0);
        }
    }
    @Override
    public void desligarMudo() {
        if(this.getLigado() && this.getVolume()==0){
            this.setVolume(55);
        }
    }
    @Override
    public void play() {
        if(this.getLigado() && !(this.getTocando())){
            this.setTocando(true);
        } else{
            System.out.println("Erro! Não consegui reproduzir.");
        }
    }
    @Override
    public void pause() {
        if(this.getLigado() && this.getTocando()){
            this.setTocando(false);
        } else{
            System.out.println("Erro! Não consegui pausar.");
        }
    }
}
