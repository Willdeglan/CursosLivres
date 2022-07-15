package aula09;

public class Aula09 {

    public static void main(String[] args) {

        Pessoa[] p = new Pessoa[3];
        Livro[] l = new Livro[4];
        
        p[0] = new Pessoa("Will", 37, "M");
        p[1] = new Pessoa("Leide", 25, "F");
        p[2] = new Pessoa("Sara", 27, "F");
        
        l[0] = new Livro("Aprendendo POO Java", "Guanabara", 201, p[1]);
        l[1] = new Livro("Estudando POO PHP", "Gustavo", 304, p[2]);
        l[2] = new Livro("Logica de Programação", "Deglan", 243, p[1]);
        l[3] = new Livro("Tag HTML para Iniciantes", "Hilp25", 621,p[0]);
        
        
        l[1].folhear(54);
        l[1].avançarPag();
        l[1].voltarPag();
        l[1].voltarPag();
        
        //System.out.println(l[0].detalhes());
        //System.out.println(l[3].detalhes());
        System.out.println(l[1].detalhes());
        //System.out.println(l[2].detalhes());
        
        p[2].fazerAniver();
        System.out.println(p[2].getIdade());
        System.out.println(l[1].detalhes());
    }
    
}
