package aula14;

public class Aula14 {

    public static void main(String[] args) {

        Video v[] = new Video[3];
        
        v[0] = new Video("Aula 14 de POO Java");
        v[1] = new Video("Aula 14 de POO PHP");
        v[2] = new Video("Aula de HTML 5  e CSS");
        
        Gafanhoto ga[] = new Gafanhoto[2];
        
        ga[0] = new Gafanhoto("Will", 37, "M", "Hilp25");
        ga[1] = new Gafanhoto("Leide", 25, "F", "Indiazinha");
        
        Visualizacao vis[] = new Visualizacao[7];
        
        //System.out.println("\nVideos\n**********************************");
        //System.out.println(v[0].toString());
        //System.out.println(v[1].toString());
        //System.out.println(v[2].toString());
        
        //System.out.println("\nGafanhotos\n**********************************");
        //System.out.println(ga[0].toString());
        //System.out.println(ga[1].toString());
        
        vis[0] = new Visualizacao(ga[0], v[2]); //will ver HTML 5 e CSS
        vis[0].avaliar(7);
        System.out.println(vis[0].toString());

        vis[1] = new Visualizacao(ga[0], v[1]); // will ver POO PHP
        vis[1].avaliar(65f);
        System.out.println(vis[1].toString());
        
        
        
    }
    
}
