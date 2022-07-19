package aula12;

public class Cachorro extends Mamifero{
    
    //Metodos da Classe
    public void enterrarOsso(){
        System.out.println("Cavando e enterrando osso no chao.");
    }
    public void abanarRabo(){
        System.out.println("Abanando o rabinho pro dono.");
    }
    
    //Metodo de Sobreposição da Classe Mamifero
    @Override
    public void emitirSom() {
        System.out.println("Late Uau, Uau, Uau ....");
    }
}
