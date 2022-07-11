package aula07;

import java.util.Random;

public class Luta {

    //Atributos
    private Lutador desafiado;
    private Lutador desafiante;
    private int rounds;
    private boolean aprovada;
    
    
    //Metodos Acessores e Modificadores
    private Lutador getDesafiado() {
        return desafiado;
    }
    private void setDesafiado(Lutador desafiado) {
        this.desafiado = desafiado;
    }
    private Lutador getDesafiante() {
        return desafiante;
    }
    private void setDesafiante(Lutador desafiante) {
        this.desafiante = desafiante;
    }
    private int getRounds() {
        return rounds;
    }
    private void setRounds(int rounds) {
        this.rounds = rounds;
    }
    private boolean getAprovada() {
        return aprovada;
    }
    private void setAprovada(boolean aprovada) {
        this.aprovada = aprovada;
    }
    
    //Metodos da Classe
    public void marcarLuta(Lutador m1, Lutador m2){
        if((m1.getCategoria().equals(m2.getCategoria())) && (m1 != m2)){
            this.aprovada = true;
            this.desafiado = m1;
            this.desafiante = m2;
        }else{
            this.aprovada = false;
            this.desafiado = null;
            this.desafiante = null;
        }
    }
    public void lutar(){
        if(this.getAprovada()){
            System.out.println("");
            System.out.println("==== Desafiante ====");
            this.getDesafiado().apresentar();
            System.out.println("");
            System.out.println("==== Desafiado ====");
            this.getDesafiante().apresentar();
            
            Random aleatorio = new Random();
            int vencedor = aleatorio.nextInt(3);
            System.out.println("");
            System.out.println("==== RESULTADO DA LUTA ====");
            
            switch(vencedor){
                case 0: //Empatar Luta
                    System.out.println("Lutar ficou Empatada !!!");
                    this.desafiado.empatarLuta();
                    this.desafiante.empatarLuta();
                    break;
                case 1: //Vencedor desafiado
                    System.out.println("Vitoria do "+this.desafiado.getNome());
                    this.desafiado.ganharLuta();
                    this.desafiante.perderLuta();
                    break;
                case 2://Vencedor desafiante
                    System.out.println("Vitoria do "+this.desafiante.getNome());
                    this.desafiado.perderLuta();
                    this.desafiante.ganharLuta();
                    break;
            }
            
        }else{
            System.out.println("");
            System.out.println("==============================");
            System.out.println("A lutar nao pode acontecer.");
        }
        System.out.println("");
    }
    
}
