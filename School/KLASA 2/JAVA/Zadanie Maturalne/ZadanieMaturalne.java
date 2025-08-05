
import java.io.File;
import java.io.FileNotFoundException;
import java.util.Scanner;

public class ZadanieMaturalne {
    public static void main(String[] args) throws FileNotFoundException{
        File plik = new File("liczby.txt");
        Scanner scanner = new Scanner(plik);
        
        int iloscliczb=0;
        while(scanner.hasNext()){
            int ilosc1=0;
            int ilosc0=0;
            String linijka = scanner.next();
            
            for(int i=0;i<linijka.length();i++){
                if(linijka.charAt(i)=='0'){
                    ilosc0++;
                }else if(linijka.charAt(i)=='1'){
                    ilosc1++;
                }
            }
            if(ilosc0>ilosc1){
                iloscliczb++;
            }
        }
        System.out.println(iloscliczb);
        
        scanner = new Scanner(plik);
        int PodzielnePrzez2=0;
        int PodzielnePrzez8=0;
        while(scanner.hasNext()){
            String linijka = scanner.next();
                if(linijka.endsWith("0")){
                    PodzielnePrzez2++;
                if(linijka.endsWith("000")){
                    PodzielnePrzez8++;
                }
            }
        }
        System.out.println(PodzielnePrzez2);
        System.out.println(PodzielnePrzez8);
    }
}
