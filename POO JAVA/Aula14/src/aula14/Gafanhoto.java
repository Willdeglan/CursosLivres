package aula14;

public class Gafanhoto extends Pessoa{

    //Atributos da Classe
    private String login;
    private int totAssistindo;

    //Metodo Construtor da Classe
    public Gafanhoto(String nome, int idade, String sexo, String login) {
        super(nome, idade, sexo);
        this.login = login;
        this.totAssistindo = 0;
    }

    //Metodos Acessores e Modificadores
    public String getLogin() {
        return login;
    }
    public void setLogin(String login) {
        this.login = login;
    }
    public int getTotAssistindo() {
        return totAssistindo;
    }
    public void setTotAssistindo(int totAssistindo) {
        this.totAssistindo = totAssistindo;
    }
    
    //Metodo da Classe
    public void viuMaisUm(){
        
    }

    //Metodos Implementados da Classe Pessoa
    @Override
    protected float ganharExperiencia() {
        return 0;
    }

    @Override
    public String toString() {
        return "Gafanhoto{" + super.toString() + "\nlogin=" + login + ", totAssistindo=" + totAssistindo + '}';
    }
    
}
