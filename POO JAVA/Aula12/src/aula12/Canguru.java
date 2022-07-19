package aula12;

public class Canguru extends Mamifero{

    //Metodo Sobreposto da Classe Mamifero
    @Override
    public void locomover() {
        System.out.println("Pulando ...");
    }
    
    //Metodo da classe
    public void usarBolsa(){
        System.out.println("Usando a bolsa pra guardar sua cria.");
    }
}
