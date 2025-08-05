import java.util.Scanner;

public class prezenty_swiateczne {
    public static void main(String[] args){
        while(true){
            Scanner scanner = new Scanner(System.in);
            System.out.println( "1 - Dodaj prezent\r\n" + //
                                "2 - Usuń prezent\r\n" + //
                                "3 - Wyświetl listę prezentów\r\n" + //
                                "4 - Zapisz listę do pliku\r\n" + //
                                "5 - Wczytaj listę z pliku\r\n" + //
                                "6 - Zakończ program");
            System.out.println("Wpisz opcję");
            int opcja = scanner.nextInt();
            String[] tablica = new String[100];

            if(opcja == 1){
                System.out.println("Co chciałbyś dodać?");
                tablica[1] = scanner.nextLine();
            }else if(opcja == 2){
                System.out.println("Który element chcesz usunąć?");
                int x =scanner.nextInt();
                tablica[x] = null;
            }else if(opcja == 3){
                for(String lista : tablica){
                    System.out.println(lista);
                }   
            }else if(opcja == 4){
                
            }else if(opcja == 5){
                
            }else if(opcja == 6){
                System.out.println("Program zakończony");
            }else{
                System.out.println("nie ma takiej opcji");
            }
        }
    }
}
