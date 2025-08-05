import java.util.Scanner;

public class main {
    public static void main(String[] args) {
        
     Scanner scanner = new Scanner(System.in);
     
     System.out.println("Podaj liczbe:");
     int liczba = scanner.nextInt();
     
     boolean czyPierwsza = true;
     
     if(liczba <= 1){
         czyPierwsza = false;
     }else{
         for(int i =2; i<=liczba ;i++){
             if(liczba%i==0){
                 czyPierwsza=false;
                 break;
             }
         }
     }
     if(czyPierwsza){
         System.out.println("Podana liczba jest licbzą pierwszą");
     }else{
         System.out.println("Podana liczba nie jeste licbzą pierwszą");
     }
        
     
     
     
    }
    
}
