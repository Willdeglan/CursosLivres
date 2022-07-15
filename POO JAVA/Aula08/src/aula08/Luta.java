package aula08;

import java.util.Random;

public class Luta {

    //Atributos da Classe
    private Lutador desafiante;
    private Lutador desafiado;
    private int rounds;
    private boolean aprovada;

    //Metodo Construtor
    public Luta() {    
        this.rounds = 0;
        this.aprovada = false;
    }

    //Metodos Acessores e Modificadores
    public Lutador getDesafiante() {
        return desafiante;
    }
    public void setDesafiante(Lutador desafiante) {
        this.desafiante = desafiante;
    }
    public Lutador getDesaficado() {
        return desafiado;
    }
    public void setDesaficado(Lutador desaficado) {
        this.desafiado = desaficado;
    }
    public int getRounds() {
        return rounds;
    }
    public void setRounds(int rounds) {
        this.rounds = rounds;
    }
    public boolean getAprovada() {
        return aprovada;
    }
    public void setAprovada(boolean aprovada) {
        this.aprovada = aprovada;
    }
    
    //Metodos da Classe
    public void marcarLuta(Lutador L1, Lutador L2){
        if(L1.getCategoria().equals(L2.getCategoria()) && L1 != L2){
            this.aprovada = true;
            this.desafiante = L1;
            this.desafiado = L2;
            System.out.println("\nA lutar foi MARCADA !!!");
        }else{
            System.out.println("\nLuta nao MARCADO, lutadores de categoria diferentes.");
        }
    }
    public void lutar(){
        if(this.aprovada){
            System.out.print("\n## DESAFIANTE ##");
            System.out.println(this.desafiante.apresentar());
            System.out.print("\n## DESAFIADO ##");
            System.out.println(this.desafiado.apresentar());
            
            Random ale = new Random();
            int a = ale.nextInt(3); //1, 2, 3
            this.rounds = ale.nextInt(4) + 1;
            switch(a){
                case 0: //Empate
                    System.out.println("\nRound: "+this.rounds);
                    System.out.println("EMPATOU");
                    this.desafiante.empatarLuta();
                    this.desafiado.empatarLuta();
                    break;
                case 1: //Vitoria do desafiante
                    System.out.println("\nRound: "+this.rounds);
                    System.out.println("Vitoria do DESAFIANTE");
                    this.desafiante.ganharLuta();
                    this.desafiado.perderLuta();
                    break;
                case 2: //Vitoria do desafiado
                    System.out.println("\nRound: "+this.rounds);
                    System.out.println("Vitoria do DESAFIADO");
                    this.desafiante.perderLuta();
                    this.desafiado.ganharLuta();
                    break;
            }
        }else{
            System.out.println("Erro !!!\nLuta nao marcada ou nao aprovada.");
        }
    }
}
