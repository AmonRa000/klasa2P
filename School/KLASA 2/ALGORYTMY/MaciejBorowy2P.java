import java.util.Scanner;

public class MaciejBorowy2P {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        String odpowiedz;
        do{
            System.out.println("Wprowadź liczbe którą chcesz sprawdzić");//Liczba doskonała
            int liczba = scanner.nextInt();
            int suma=0;
            for(int i=1;i<liczba;i++){
                if(liczba%i==0){
                    suma+=i;
                    System.out.println(i);
                }
            }
            if(liczba==suma){
                System.out.println(liczba+" jest liczbą doskonałą");
            }else{
                System.out.println(liczba+" nie jest liczbą doskonałą");
            }
            scanner.nextLine();
            System.out.println("Wpisz T/t aby powtórzyć program");
            odpowiedz = scanner.nextLine();
        }while(odpowiedz.equalsIgnoreCase("T"));
    }
}
