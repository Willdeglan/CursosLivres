package aula11;

public class Tecnico extends Aluno{

    //Atributos
    private int registro;
    
    //Metodos Acessores e Modificadores
    public int getRegistro() {
        return registro;
    }
    public void setRegistro(int registro) {
        this.registro = registro;
    }
    
    //Metodo da classe
    public void praticar(){
        System.out.println("Executando atividades praticas.");
    }
    
}
