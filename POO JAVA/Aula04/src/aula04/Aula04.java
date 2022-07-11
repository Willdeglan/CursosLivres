package aula04;

public class Aula04 {

    public static void main(String[] args) {

      Caneta c1 = new Caneta("nic", "verde", 0.4f);  

      //c1.setModelo("Bic cristal");
      //c1.modelo = "Bic";
      
      //c1.setPonta(0.5f);
      //c1.ponta = 0.6f;
      
      //c1.status();
      
      //System.out.println("Eu tenho uma caneta "+ c1.getModelo() + " de ponta "+ c1.getPonta());
      
      c1.status();
      
      Caneta c2 = new Caneta("Bom", "vermelho", 0.8f);
      c2.status();
      
      
      
      
    }
}
