/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package metody;

import java.util.Scanner;

/**
 *
 * @author p23borowym
 */
public class metody_zadania {



    public static void Dzielniki(int a){
        for(int i = 1;i<=a; i++){
        if(a%i==0){
            System.out.println(i);
        }
    }
}   
    public static void czy_pierwsza(int b){
        for(int i = 2;i<b; i++){
        if(b%i==0){
            System.out.println(b+" nie jest liczba piewsza");
            break;
        }else{
            System.out.println(b+" jest liczba pierwsza");
            break;
        }
    }
}
    public static void czy_doskonala(int c){
        int wynik =0;
        for(int i = 1;i<c; i++){
        if(c%i==0){
            wynik = wynik += i;
        } 
    }
        if(wynik == c){
            System.out.println(c + " jest liczba doskonałą");
        }else{
            System.out.println(c + " nie jest liczba doskonałą");
        }
}
    
    

public static void main(String[] args) {
    Scanner scanner = new Scanner(System.in);
    
    System.out.println("Podaj liczbe ktorej dzielniki chcesz zobaczyc");
    int a =scanner.nextInt();
    Dzielniki(a);
    
    System.out.println("Podaj liczbe którą chcesz sprawdzić");
    int b =scanner.nextInt();
    czy_pierwsza(b);
    
    System.out.println("Podaj liczbe którą chcesz sprawdzić czy jest doskonała");
    int c =scanner.nextInt();
    czy_pierwsza(c);
}
}

