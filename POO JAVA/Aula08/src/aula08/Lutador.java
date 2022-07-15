package aula08;

public class Lutador {

    //Atributos da Classe
    private String nome;
    private String nacionalidade;
    private int idade;
    private float altura;
    private float peso;
    private String categoria;
    private int vitorias;
    private int derrotas;
    private int empates;
    
    //Metodo construtor
    public Lutador(String nome, String nacionalidade, int idade, float altura, float peso, int vitorias, int derrotas, int empates) {
        this.nome = nome;
        this.nacionalidade = nacionalidade;
        this.idade = idade;
        this.altura = altura;
        this.setPeso(peso);
        this.vitorias = vitorias;
        this.derrotas = derrotas;
        this.empates = empates;
    }
    
    //Metodos Acessores e Modificadores
    public String getNome(){    
        return nome;    
    }
    public void setNome(String nome) {
        this.nome = nome;
    }
    public String getNacionalidade() {
        return nacionalidade;
    }
    public void setNacionalidade(String nacionalidade) {
        this.nacionalidade = nacionalidade;
    }
    public int getIdade() {
        return idade;
    }
    public void setIdade(int idade) {
        this.idade = idade;
    }
    public float getAltura() {
        return altura;
    }
    public void setAltura(float altura) {
        this.altura = altura;
    }
    public float getPeso() {
        return peso;
    }
    public void setPeso(float peso) {
        this.peso = peso;
        if(this.getPeso() < 50){
            System.out.println("Pesso muito baixo para qualquer categoria.");
        }else if(this.getPeso() >= 50 && this.getPeso() < 70){
            this.categoria = "Peso Pena";
        }else if(this.getPeso() >= 70 && this.getPeso() <= 90){
            this.categoria = "Peso Leve";
        }else if(this.getPeso() >= 90 && this.getPeso() < 110){
            this.categoria = "Peso Medio";
        }else if(this.getPeso() >= 110 && this.getPeso() < 140){
            this.categoria = "Peso Pesado";
        }else{
            System.out.println("Peso muito alto, sem categoia especifica.");
        }
    }
    public String getCategoria() {
        return categoria;
    }
    public void setCategoria(String categoria) {
        this.categoria = categoria;
    }
    public int getVitorias() {
        return vitorias;
    }
    public void setVitorias(int vitorias) {
        this.vitorias = vitorias;
    }
    public int getDerrotas() {
        return derrotas;
    }
    public void setDerrotas(int derrotas) {
        this.derrotas = derrotas;
    }
    public int getEmpates() {
        return empates;
    }
    public void setEmpates(int empates) {    
        this.empates = empates;
    }

    //Metodos da Classe
    public String apresentar() {
        return "\n==== Lutador === {" + "\nnome = " + nome + 
                "\nnacionalidade = " + nacionalidade + "\nidade = " + idade + 
                "\naltura = " + altura + "\npeso = " + peso + 
                "\ncategoria = " + categoria + "\nvitorias = " + vitorias + 
                "\nderrotas = " + derrotas + "\nempates = " + empates + '}';
    
    }
    public void status(){
        System.out.println("\n==========================");
        System.out.println("Nacionalida: "+this.getNacionalidade());
        System.out.println("Nome: "+this.getNome());
        System.out.println("Vitorias: "+this.getVitorias());
        System.out.println("Derrotas: "+this.getDerrotas());
        System.out.println("Empates: "+this.getEmpates());
    }
    public void ganharLuta(){
        this.vitorias++;
    }
    public void perderLuta(){
        this.derrotas++;
    }
    public void empatarLuta(){
        this.empates++;
    }
}
