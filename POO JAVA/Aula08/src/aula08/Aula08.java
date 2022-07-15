package aula08;

public class Aula08 {

    public static void main(String[] args) {

        Lutador lu[] = new Lutador[7];
        
        lu[0] = new Lutador("Will", "Brasil", 25, 1.68f, 68.5f, 4, 2, 1);
        lu[1] = new Lutador("Marcos", "Agentina", 21, 1.65f, 69f, 2, 2, 0);
        lu[2] = new Lutador("Tiago", "Portugal", 28, 1.7f, 75.2f, 4, 5, 3);
        lu[3] = new Lutador("Joao", "Alemanha", 30, 1.75f, 81.4f, 1, 4, 3);
        lu[4] = new Lutador("Pedro", "Chile", 31, 1.69f, 95.8f, 5, 2, 5);
        lu[5] = new Lutador("Carlos", "EUA", 36, 1.76f, 101.3f, 6, 1, 4);
        lu[6] = new Lutador("Bruno", "Peru", 33, 1.85f, 112.5f, 2, 5, 2);
        
        Luta Lutar = new Luta();
        
        //Lutar.marcarLuta(lu[2], lu[3]);
        //Lutar.lutar();
        
        //lu[2].status();
        //System.out.println(lu[2].apresentar());
        //System.out.println(lu[3].apresentar());
        
        Lutar.marcarLuta(lu[2], lu[3]);
        
        Lutar.lutar();
        
        lu[2].status();
        lu[3].status();
        //System.out.println(lu[2].apresentar());
        //System.out.println(lu[3].apresentar());
        
    }
    
}
