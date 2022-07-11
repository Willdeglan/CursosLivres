package caneta;

public class Canela2 {

    String modelo;
        String cor;
        float ponta;
        int carga;
        boolean tampada;
        
        void status(){
            System.out.println("Modelo "+this.modelo);
            System.out.print("Uma caneta "+this.cor);
            System.out.println("Ponta "+this.ponta);
            System.out.println("Carga "+this.carga);
            System.out.println("\nEsta tampada? "+this.tampada);
        }
        
        void rabiscar(){
            if(this.tampada == true){
                System.out.println("Erro. Estou tampada !!!");
            } else{
                System.out.println("Estou rabiscando ...");
            }
    }
        void tampar(){
            this.tampada = true;
        
    }
        void destampada(){
            this.tampada = false;
    }
}
