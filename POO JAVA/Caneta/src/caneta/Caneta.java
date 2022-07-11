package caneta;
public class Caneta {

    public static void main(String[] args) {
   
    Canela2 c2 = new Canela2();
    
    c2.cor = "azul";
    c2.ponta = 0.5f;
    c2.tampada = false;
    
    c2.destampada();
    c2.status();
    c2.rabiscar();
    
    }
}
