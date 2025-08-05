import java.util.Random;

public class sort_wyb{
    public static void main(String[] args) {
        Random rand = new Random();
        int[] tablica = new int[10];

        for(int i=0;i<10;i++){
            tablica[i] = rand.nextInt(200)-100;
            System.out.print(tablica[i]+" ");
        }
        
        for(int i=0;i<9;i++){
            int min = tablica[i];
            int pozycja = i;

            for(int j=i;j<10;j++){
                if(tablica[j]<min){
                    min=tablica[j];
                    pozycja=j;
                }
            }
            int temp = tablica[i];
            tablica[pozycja] = temp;
            tablica[i] = min;
        }

        System.out.println();
        for(int x : tablica){
            System.out.print(x+" ");
        }
    }
}