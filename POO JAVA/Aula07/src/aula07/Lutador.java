package aula07;

public class Lutador {
    
    //Atributos;
    private String nome;
    private String nacionalidade;
    private int idade;
    private float altura;
    private float peso;
    private String categoria;
    private int vitorias;
    private int derrotas;
    private int empate;
    
    //Metodos Construtores

    public Lutador(String nome, String nacionalidade, int idade, float altura, float peso, int vitorias, int derrotas, int empate) {
        this.nome = nome;
        this.nacionalidade = nacionalidade;
        this.idade = idade;
        this.altura = altura;
        this.setPeso(peso);
        this.setVitorias(vitorias);
        this.setDerrotas(derrotas);
        this.setEmpate(empate);
    }
    
    //Metodos Acessores e Modificadores;
    public String getNome() {
        return nome;
    }
    private void setNome(String nome) {
        this.nome = nome;
    }
    private String getNacionalidade() {
        return nacionalidade;
    }
    private void setNacionalidade(String nacionalidade) {
        this.nacionalidade = nacionalidade;
    }
    private int getIdade() {
        return idade;
    }
    private void setIdade(int idade) {
        this.idade = idade;
    }
    private float getAltura() {
        return altura;
    }
    private void setAltura(float altura) {
        this.altura = altura;
    }
    private float getPeso() {
        return peso;
    }
    private void setPeso(float peso) {
        this.peso = peso;
        setCategoria();
    }
    public String getCategoria() {
        return categoria;
    }
    private void setCategoria() {
        if(getPeso() < 52.2){
            this.categoria = "Invalido";
        }else if(getPeso() <= 70.3){
            this.categoria = "Leve";
        }else if(getPeso() <=83.9){
            this.categoria = "Medio";
        }else if(getPeso() <= 120.2){
            this.categoria = "Pesado";
        }else{
            this.categoria = "Invalido";
        }
    }
    private int getVitorias() {
        return vitorias;
    }
    private void setVitorias(int vitorias) {
        this.vitorias = vitorias;
    }
    private int getDerrotas() {
        return derrotas;
    }
    private void setDerrotas(int derrotas) {
        this.derrotas = derrotas;
    }
    private int getEmpate() {
        return empate;
    }
    private void setEmpate(int empate) {
        this.empate = empate;
    }
    
    //Metodos da Classe;
    public void apresentar(){
        System.out.println("====================================");
        System.out.println("Lutador: "+this.getNome()+".");
        System.out.println("Nacionalidade: "+this.getNacionalidade()+".");
        System.out.println("Idade: "+this.getIdade()+" anos.");
        System.out.println("Altura: "+this.getAltura()+" metros.");
        System.out.println("Peso: "+this.getPeso()+" Kg.");
        System.out.println("Categoria: "+this.getCategoria()+".");
        System.out.println("Vitorias: "+this.getVitorias()+".");
        System.out.println("Derrotas: "+this.getDerrotas()+".");
        System.out.println("Empates: "+this.getEmpate()+".");
    }
    public void status(){
        System.out.println("====================================");
        System.out.println("-------- "+this.getNome()+" --------");
        System.out.println("__ "+this.getPeso()+"Kg __");
        System.out.println("__ "+this.getCategoria()+" __");
        System.out.println("Vitorias: __ "+this.getVitorias()+" __");
        System.out.println("Derrotas: __ "+this.getDerrotas()+" __");
        System.out.println("Empates: __ "+this.getEmpate()+" __");
    }
    public void ganharLuta(){
        this.setVitorias(this.getVitorias() + 1);
    }
    public void perderLuta(){
        this.setDerrotas(this.getDerrotas() + 1);
    }
    public void empatarLuta(){
        this.setEmpate(this.getEmpate() + 1);
    }
    
}
