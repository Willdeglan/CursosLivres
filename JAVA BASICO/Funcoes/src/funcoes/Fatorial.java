/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package funcoes;

/**
 *
 * @author 3CIPM
 */
public class Fatorial {
    
    private int num = 0;
    private int fat = 1;
    private String form = "";
    
    public void setValor(int a){
        num = a;
        int f = 1;
        String s = "";
        
        for(int i = a; i > 1; i--){
            f *= i;
            s += i + " x ";
        }
        
        s += "1 = ";
        fat = f;
        form = s;
        
    }
    
    public int getFatorial(){
        return fat;
    }
    
    public String getFormula(){
        return form;
        
    }
    
}
