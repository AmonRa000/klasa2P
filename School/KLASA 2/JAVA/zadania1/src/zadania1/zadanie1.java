package zadania1;

public class zadanie1{
    public class Obliczenia {
        public static int silnia(int liczba) {
        int silnia = 1;
        for (int i = 1; i <= liczba; i++) {
            silnia = silnia * i;
        }
        return silnia;
        }
        
        public static int sumaLiczb(int[] tab) {
            int suma = 0;
            for (int i : tab) {
              suma += i;
            }
        return suma;
        }
    }
    
    public class WykonywanieObliczen {
    public static void main(String[] args) {
        System.out.println("Silnia z 10 to " + Obliczenia.silnia(10));
        int[] liczby = {100,2,15};
        System.out.println("Suma liczb wynosi " + Obliczenia.sumaLiczb(liczby));
    }
    }
}