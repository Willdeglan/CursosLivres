package aula12;

public class Aula12 {

    public static void main(String[] args) {

        Mamifero ma = new Mamifero();
        Ave av = new Ave();
        Peixe pe = new Peixe();
        Reptil re = new Reptil();
        
        System.out.println("\n== Mamifero ==");
        ma.setPeso(12.5f);
        ma.setIdade(2);
        ma.setMembros(4);
        ma.setCorPelo("Cinza");
        ma.alimentar();
        ma.emitirSom();
        ma.locomover();
        
        System.out.println("\n== Ave ==");
        av.setPeso(0.5f);
        av.setCorPena("preta");
        av.setIdade(1);
        av.setMembros(4);
        av.alimentar();
        av.emitirSom();
        av.locomover();
        
        System.out.println("\n== Peixe ==");
        pe.setPeso(5);
        pe.setIdade(1);
        pe.setCorEscama("Marrom");
        pe.setMembros(0);
        pe.alimentar();
        pe.emitirSom();
        pe.locomover();
        
        System.out.println("\n== Reptil ==");
        re.setCorEscama("Amarelado");
        re.setIdade(3);
        re.setMembros(4);
        re.setPeso(7);
        re.alimentar();
        re.emitirSom();
        re.locomover();
        
        System.out.println("\n== Canguru ==");
        Canguru can = new Canguru();
        can.alimentar();
        can.emitirSom();
        can.locomover();
        can.usarBolsa();
        
        System.out.println("\n== Cachorro ==");
        Cachorro cac = new Cachorro();
        cac.alimentar();
        cac.emitirSom();
        cac.locomover();
        cac.enterrarOsso();
        cac.abanarRabo();
        
        System.out.println("\n== Cobra ==");
        Cobra cob = new Cobra();
        cob.alimentar();
        cob.emitirSom();
        cob.locomover();
        
        System.out.println("\n== Tartaruga ==");
        Tartaruga tar = new Tartaruga();
        tar.alimentar();
        tar.emitirSom();
        tar.locomover();
        
        System.out.println("\n== Goldfish ==");
        Goldfish gold = new Goldfish();
        gold.alimentar();
        gold.emitirSom();
        gold.locomover();
        
        System.out.println("\n== Arara ==");
        Arara ara = new Arara();
        ara.alimentar();
        ara.emitirSom();
        ara.locomover();
        
    }
    
}
