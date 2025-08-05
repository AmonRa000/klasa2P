import java.util.Random;

public class sortowanie_babelkowe {
    public static void main(String[] args) {
        Random rand = new Random();
        int[] tablica = new int[10];
        for(int i=0;i<9;i++){
            tablica[i] = rand.nextInt(100);
            System.out.print(tablica[i] + " ");
        }
        for(int i=0;i<9;i++){
            for(int j=0;j<9;j++){        
                if(tablica[j]>tablica[j+1]){
                    int pom = tablica[j];
                    tablica[j] = tablica[j+1];
                    tablica[j+1] = pom;
                }
            }
        }

        System.out.println("");
        for(int liczba : tablica){
            System.out.print(liczba + " ");
        }
    }
}
