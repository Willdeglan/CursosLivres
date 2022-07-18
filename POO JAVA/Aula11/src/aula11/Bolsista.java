package aula11;

public class Bolsista extends Aluno{
    
    //Atributos da Classe
    private float bolsa;

    //Metodos Acessores e Modificadores
    public float getBolsa() {
        return bolsa;
    }
    public void setBolsa(float bolsa) {
        this.bolsa = bolsa;
    }
    
    //Metodos da Classe
    public void renovarBolsa(){
        System.out.println("Renovando a bolsa do "+this.nome+" do curso "+this.getCurso());
    }
    @Override
    public void pagarMensalidade(){
        System.out.println(this.nome+" e bolsista! Pagamento facilitado.");
    }
}
