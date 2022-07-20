package aula13;

public class Cachorro extends Lobo{

    //Metodo de Sobreposição da Classe Lobo
    @Override
    public void emitirSom() {
        System.out.println("Au! Au! Au! ...");
    }
    
    //Metodo da Classe
    public void reagir(String frase){
        if(("Comida".equals(frase)) || ("oi".equals(frase))){
            System.out.println("\nAbana o rabinho e latir alegre.");
        }else{
            System.out.println("\nRosna bastante zangado.");
        }
    }
    public void reagir(int hora, int min){
        if(hora < 12){
            System.out.println("\nAbana o rabo ...");
        }else if(hora >= 18){
            System.out.println("\nIgnora a pessoa");
        }else{
            System.out.println("\nAbana e late muito.");
        }
    }
    public void reagir(boolean dono){
        if(dono){
            System.out.println("\nLate muito, alegre ...");
        }else{
            System.out.println("\nRosna e Latir.");
        }
    }
    public void reagir(int idade, float peso){
        if(idade < 2){
            if(peso >1){
                System.out.println("\nCorre, pula e late ...");
            }else{
                System.out.println("\nPula e Corre.");
            }
        }else{
            if(idade >= 2){
                System.out.println("\nLate e se esconde.");
            }else{
                System.out.println("\nEsconde e rosna muito.");
            }
        }
    }
}
