package aula09;

import java.util.Random;

public class Livro implements Publicacao {

    //Atributos da Classe
    private String tiluto;
    private String autor;
    private int totPaginas;
    private int pagAtual;
    private boolean aberta;
    private Pessoa leitor;
    
    //Metodo Construtor
    public Livro(String titul, String aut, int totPag, Pessoa leitor) {
        this.tiluto = titul;
        this.autor = aut;
        this.pagAtual = 0;
        this.aberta = false;
        this.totPaginas = totPag;
        this.leitor = leitor;
    }
    
    //Metodos Acessores e Modificadores da Classe
    public String getTiluto() {
        return tiluto;
    }
    public void setTiluto(String tiluto) {
        this.tiluto = tiluto;
    }
    public String getAutor() {
        return autor;
    }
    public void setAutor(String autor) {
        this.autor = autor;
    }
    public int getTotPaginas() {
        return totPaginas;
    }
    public void setTotPaginas(int totPaginas) {
        this.totPaginas = totPaginas;
    }
    public int getPagAtual() {
        return pagAtual;
    }
    public void setPagAtual(int pagAtual) {
        this.pagAtual = pagAtual;
    }
    public boolean isAberta() {
        return aberta;
    }
    public void setAberta(boolean aberta) {
        this.aberta = aberta;
    }
    public Pessoa getLeitor() {
        return leitor;
    }
    public void setLeitor(Pessoa leitor) {
        this.leitor = leitor;
    }
    
    //Metodo da Classe
    public String detalhes() {
        return "Livro \n{" + "\nTiluto = " + tiluto + ", \nAutor = " + autor + ","
                + " \nTotal de Paginas = " + totPaginas + ", \nPagina Atual = " + pagAtual + ","
                + " \nAberta = " + aberta + ", \nLeitor = " + leitor.getNome() + "\nIdade = "
                + leitor.getIdade() + "\nSexo = " + leitor.getSexo() + "\n}";
    }
    
    
    //Metodos da Interface
    @Override
    public void abrir() {
        this.aberta = true;
    }
    @Override
    public void fechar() {
        this.aberta = false;
    }
    @Override
    public void folhear(int folhear){
        if((this.getTotPaginas() >= folhear) && (this.getTotPaginas() >= this.getPagAtual()+folhear)){
            this.pagAtual = folhear;
        }else{
            System.out.println("Erro. Pagina do livro insuficiente.");
        }
    }
    @Override
    public void avançarPag() {
        this.pagAtual++;
    }
    @Override
    public void voltarPag() {
        this.pagAtual--;
    }
    
}
