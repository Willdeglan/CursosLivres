package aula14;

public class Video implements AcoesVideo{

    //Atributos da Classe
    private String titulo;
    private int avaliação;
    private int views;
    private int curtidas;
    private boolean reproduzindo;

    //Metodo Construtor da Classe
    public Video(String titulo) {
        this.titulo = titulo;
        this.avaliação = 1;
        this.views = 0;
        this.curtidas = 0;
        this.reproduzindo = false;
    }
    
    //Metodos Acessores e Modificadores
    public String getTitulo() {
        return titulo;
    }
    public void setTitulo(String titulo) {
        this.titulo = titulo;
    }
    public int getAvaliação() {
        return avaliação;
    }
    public void setAvaliação(int avaliação) {
        int no;
        no = (int) ((this.avaliação + avaliação)/this.views);
        this.avaliação = no;
    }
    public int getViews() {
        return views;
    }
    public void setViews(int views) {
        this.views = views;
    }
    public int getCurtidas() {
        return curtidas;
    }
    public void setCurtidas(int curtidas) {
        this.curtidas = curtidas;
    }
    public boolean isReproduzindo() {
        return reproduzindo;
    }
    public void setReproduzindo(boolean reproduzindo) {
        this.reproduzindo = reproduzindo;
    }
    
    //Metodos Abstratos Implementados da Interface
    @Override
    public void play() {
        this.reproduzindo = true;
    }
    @Override
    public void pause() {
        this.reproduzindo = false;
    }
    @Override
    public void like() {
        this.curtidas ++;
    } 
    @Override
    public String toString() {
        return "Video{" + "titulo=" + titulo + ", avaliacao="
                + avaliação + ", views=" + views + ", curtidas=" + curtidas
                + ", reproduzindo=" + reproduzindo + '}';
    }
    
}
