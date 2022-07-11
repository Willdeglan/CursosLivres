package aula05;

public class Banco {
 
    public int numConta;
    protected String tipo;
    private String dono;
    private float saldo;
    private boolean status;

    public void estadoAtual(){
        System.out.println("-----------------------");
        System.out.println("Conta: "+this.getNumConta());
        System.out.println("Tipo: "+this.getTipo());
        System.out.println("Dono: "+this.getDono());
        System.out.println("Saldo: "+this.getSaldo());
        System.out.println("Status: "+this.getStatus());
    }
    
    public Banco() {
        this.setSaldo(0);
        this.setStatus(false);
    }
    
    public void abrirConta(String t){
        this.setTipo(t);
        this.setStatus(true);
        if(this.getTipo() == "CC"){
            this.setSaldo(50);
        } else if(this.getTipo() == "CP"){
                    this.setSaldo(150);
                }
    }
    public void fecharConta(){
        if(this.getSaldo() > 0){
            System.out.println("Impossível. Existe Saldo em conta.");
        } else if(this.getSaldo() < 0){
                    System.out.println("Impossível. Conta com Saldo devedor.");
                } else
                    System.out.println("Conta encerrada com Suceço.");
    }
    public void depositar(float s){
        if(this.getStatus() == true){
            setSaldo(this.getSaldo() + s);
            System.out.println("Deposito realizado na conta "+this.getNumConta()+ " do Sr. "+this.getDono());
        } else
            System.out.println("Erro. Conta esta Fechada.");
    }
    public void sacar(float s){
        if(this.getStatus() == true){
            if(this.getSaldo() >= s){
                this.setSaldo(this.getSaldo() - s);
                System.out.println("Saque realizado com sucesso na conta "+this.getNumConta());
            } else
                System.out.println("Erro. Saldo em conta Insuficiente.");
        } else
            System.out.println("Impossível. Conta fechada.");
    }
    public void pagarMensalidade(){
        float v = 0;
        if(this.getTipo() == "CC"){
            v = 12;
        } else if(this.getTipo() == "CP"){
                    v = 20;
                }
        if(this.getStatus() == true){
            if(this.getSaldo() >= v){
                this.setSaldo(this.getSaldo() - v);
                System.out.println("Mensalidade de R$ "+v+",00 paga com sucesso na conta "+this.getNumConta());
            } else
                System.out.println("Impossível pagar com conta fechada.");
        }
    }

    
    public int getNumConta() {
        return this.numConta;
    }
    public void setNumConta(int numConta) {
        this.numConta = numConta;
    }

    public String getTipo() {
        return this.tipo;
    }
    public void setTipo(String tipo) {
        this.tipo = tipo;
    }

    public String getDono() {
        return this.dono;
    }
    public void setDono(String dono) {
        this.dono = dono;
    }

    public float getSaldo() {
        return this.saldo;
    }
    public void setSaldo(float saldo) {
        this.saldo = saldo;
    }

    public boolean getStatus() {
        return this.status;
    }
    public void setStatus(boolean status) {
        this.status = status;
    }
}
