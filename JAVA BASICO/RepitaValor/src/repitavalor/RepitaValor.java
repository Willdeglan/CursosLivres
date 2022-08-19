/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package repitavalor;

import javax.swing.JOptionPane;

/**
 *
 * @author 3CIPM
 */
public class RepitaValor {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        
        //JOptionPane.showMessageDialog(null, "Olá, mundo !!!", "Boas Vindas", JOptionPane.ERROR_MESSAGE);
        
        int m, tot = 0, par=0, imp=0, maior50=0;
        float media=0;
        
        do{
            m = Integer.parseInt(JOptionPane.showInputDialog(null, "<html>Informe um número: <br><en>(Valor 0 interrompe)</en> </html>"));
        //JOptionPane.showMessageDialog(null, "Você digitou o "+m);
        
        tot++;
        if(m % 2 == 0){
            par++;
        }else{
            imp++;
        }
        if(m > 50){
            maior50++;
        }
        media = (media + m)/2;
        
        }while(m != 0);
        JOptionPane.showMessageDialog(null, "<html>Resultado dos Valores Digitados<br><hr>"
                + "<br>Total de Números digitados:  "+tot+"<br>"
                        + "Total de Números Pares:  "+par+"<br>"
                                + "Total de Números Impares:  "+imp+"<br>"
                                        + "Total de Números acima de 50:  "+maior50+"<br>"
                                                + "Media dos Números digitados:  "+media+"</html>");
        //System.out.println(m);
        
    }
    
}
