package aula13;

public class Aula13 {

   public static void main(String[] args) {

       Mamifero ma = new Mamifero();
       ma.setPeso(5);
       ma.setMembro(4);
       ma.setIdade(3);
       ma.setCorPelo("Cinza");
       ma.emitirSom();
       
       Lobo lo = new Lobo();
       lo.setPeso(8);
       lo.setMembro(4);
       lo.setIdade(8);
       lo.setCorPelo("Preto");
       lo.emitirSom();
   
       Cachorro ca = new Cachorro();
       ca.setPeso(2);
       ca.setMembro(4);
       ca.setIdade(1);
       ca.setCorPelo("Branco");
       ca.emitirSom();
       ca.reagir("oi");
       ca.reagir(true);
       ca.reagir(2, 3);
       ca.reagir(10, 40);
   
   }
    
}
