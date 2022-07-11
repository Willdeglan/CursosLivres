package aula05;

public class Aula05 {

    public static void main(String[] args) {

       Banco p1 = new Banco(); 

       p1.setNumConta(1234);
       p1.setDono("Will");
       p1.abrirConta("CC");

       Banco p2 = new Banco();
       
       p2.setNumConta(4321);
       p2.setDono("Leide");
       p2.abrirConta("CP");
       
       p2.depositar(500);
       p2.sacar(100);
       
       p1.depositar(100);
       p1.fecharConta();
       
       
       p2.estadoAtual();
       p1.estadoAtual();

    }
    
}
