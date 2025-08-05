/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package zadanie1;
import java.util.Scanner;
/**
 *
 * @author p23borowym
 */
public class zadanie1 {
    public static void main(String[] args) {
     Scanner in = new Scanner(System.in);
        int ileliczb = in.nextInt();
        int najw = 0;
        int najm = 0;
        if(ileliczb > 0){
            for(int i=0;i < ileliczb;i++){
                System.out.println("Wprowadź liczbe:");
                int liczba  = in.nextInt();
                if(i==0){
                    liczba = najw;
                    liczba = najm;
                    continue;
                }
                if(liczba>najw){
                   najw = liczba;
                }
                if(liczba<najm){
                    najm=liczba;
                }
            }
            System.out.println("max = " + najw + "min = "+ najm);
            }else{
            System.out.println("Nie mozna wprowadzić 0 liczb");
        }
    }
}
