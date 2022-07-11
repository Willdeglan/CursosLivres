package aula07;

public class Aula07 {

    public static void main(String[] args) {

        //Lutador l = new Lutador("WillBoy", "Brasil", 36, 1.68f, 68.9f, 11, 2 , 1);

        //l.apresentar();
        //l.status();

        Lutador l[] = new Lutador[6];

        l[0] = new Lutador("WillBoy", "Brasil", 36, 1.68f, 68.9f, 11, 2 , 1);
        l[1] = new Lutador("Putscript", "França", 29, 1.68f, 57.8f, 14, 2, 3);
        l[2] = new Lutador("Snepshadown", "Japao", 35, 1.65f, 80.9f, 12, 2, 1);
        l[3] = new Lutador("Dear Code", "USA", 28, 1.93f, 81.6f, 13, 0, 2);
        l[4] = new Lutador("UfoCobol", "Australia", 37, 1.70f, 119.3f, 5, 4, 3);
        l[5] = new Lutador("Nerdaarte", "Mexico", 30, 1.81f, 105.7f, 12, 2, 4);
        
        //l[3].status();
        //l[0].ganharLuta();
        //l[4].empatarLuta();
        //l[3].perderLuta();
        
        //l[1].apresentar();
        
        Luta UFC01 = new Luta();
        
        UFC01.marcarLuta(l[3], l[2]);
        
        UFC01.lutar();
        
        l[3].status();
        l[2].status();
    }
    
}
