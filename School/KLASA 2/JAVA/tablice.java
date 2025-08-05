package zadanie1;
import java.util.Scanner;

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */

/**
 *
 * @author p23borowym
 */
public class zadanie2 {
    public static void main(String[] args) {
    Scanner in = new Scanner(System.in);
    System.out.print("ile chcesz wprowadzic liczb: ");
    int ileLiczb = in.nextInt();
    if(ileLiczb < 1){
        System.out.println("Liczba nie może być mniejsza niż 1");
        return;
    }
    int[] tab = new int[ileLiczb];
    for(int i=0; i<ileLiczb; i++){
        System.out.print("Wpisz liczbe: ");
        tab[i] = in.nextInt();
    }
    int najmniejszy = tab[0], najwiekrzy = tab[0];
    for(int element : tab){
        if(element < najmniejszy){
            najmniejszy = element;
    }
        if(element > najwiekrzy){
            najwiekrzy = element;
        }
    }
    System.out.println("Najwiekrza liczba: " + najwiekrzy +"\nNajmniejsza liczba:" + najmniejszy);
}
}
