'''
MODUŁY:
Większy kod oznacza trudniejsze jego utrzymanie i utudnia wyszukiwanie błędów dlatego można podzielić go na wiele części,
realizowane równolegle przez wielu indywidualnych programistów.
Użycie jednego dużego pliku źródłowego, który jest edytowany przez wszystkich programistów w tym samym czasie doprowadziłoby do katastrofy.

Aby projekt oprogramowania zakończył się pomyślnie, trzeba mieć środki umożliwiające:
    • podzielenie wszystkie zadań pomiędzy programistów; 
    • połączenie wszystkich utworzonych części w jedną działającą całość. 
Na przykład pewien projekt można podzielić na dwie główne części:
    • interfejs użytkownika (część komunikująca się z użytkownikiem za pomocą widżetów i ekranu graficznego) 
    • logika (część przetwarzająca dane i podająca wyniki) 
Każda z tych części może (najprawdopodobniej) być podzielona na mniejsze, i tak dalej. 
Taki proces często nazywany jest DEKOMPOZYCJĄ.

Obsługa modułów wiąże się z dwiema różnymi sytuacjami:
    • pierwsza, najbardziej powszechna występuje, gdy chcesz użyć istniejącego modułu, w tym przypadku jesteśmy użytkownikami modułu; 
    • gdy tworzymy nowy moduł, bądź na własny użytek, bądź aby ułatwić życie innym programistom - jesteśmy dostawcą modułu. 

Moduł jest identyfikowany przez swą nazwę
Pewna liczba modułów dostarczana jest razem z samym językiem Python. Wraz z wbudowanymi funkcjami, tworzą bibliotekę standardową języka Python.
https://docs.python.org/3/library/index.html.

Każdy moduł składa się z elementów, które mogą być funkcjami, zmiennymi, stałymi, klasami i obiektami

Jeśli chcemy użyć dwóch elementów dostarczonych przez moduł math:
    • symbol reprezentujący możliwie dokładną wartość π (pi) 
    • funkcję o nazwie sin() 
Oba te elementy są dostępne za pośrednictwem modułu math, ale sposób, w jaki można z nich korzystać, zależy w dużej mierze od sposobu wykonania importu.

Przestrzeń nazw to przestrzeń, w której istnieją pewne nazwy, i te nazwy nie kolidują ze sobą (tzn. nie istnieją dwa różne obiekty o tej samej nazwie). 
Można powiedzieć, że każda grupa społeczna to przestrzeń nazw - grupa ma tendencję do nazywania każdego 
z jej członków w unikalny sposób (np. rodzice nie dadzą swoim dzieciom tych samych imion).

Wewnątrz określonej przestrzeni nazw każda nazwa musi pozostać unikalna.

Jeśli moduł o określonej nazwie istnieje i jest dostępny (moduł jest w rzeczywistości plikiem źródłowym języka Python), 
język Python importuje jego zawartość, tzn. wszystkie nazwy zdefiniowane w module stają się znane, ale nie wchodzą w przestrzeń nazw twojego kodu.


#1: import
import math

wart = math.pi
print(math.sin(wart/2))
print(math.e) 	

#----------------------------
#2: przestrzeń nazw
import math, sys

def sin(x):
    return 100*x

pi = 5

print(math.sin(math.pi))
print(sin(pi))
#----------------------------
#3. import tylko wybranych elementów (nie potrzebny prefix)

from math import pi, sin

def sin(x):
    return 100*x
pi = 5
print(math.sin(math.pi))

print(sin(pi))
print(math.e) 	#błąd (trzeba dodać e po słowie import)

#-----------------------------
#4. Taka instrukcja importuje wszystkie elementy ze wskazanego modułu:
#   (niebezpieczne, jeśli nie znamy wszystkich nazw podanych przez moduł, można nie być w stanie uniknąć konfliktu nazw)

from modul import * 

#------------------------------
#5. import moduł as alias

import math as m 
print(m.sin(m.pi/2)) 
print(math.sin(math.radians(270)))
#------------------------------

#6. from modul import nazwa as alias 
#   from modul import n as a, m as b, o as c 

from math import pi as PI, sin as sine 
print(sine(PI/2)) 

#------------------------------
#Da się tak, ale to bez sensu:

import math
from math import pi, sin as sine 

print(math.pi, pi)

#------------------------------
7. Listing zawartości modułu:

import math 
print(dir(math))

#lub:

import math as m
for name in dir(m): 
    print(name, end="\t") 

# ------------------------------

Elementy modułu math
    • sin(x) → sinus x; 
    • cos(x) → cosinus x; 
    • tan(x) → tangens x. 
    • asin(x) → arcus sinus x; 
    • acos(x) → arcus cosinus x; 
    • acos(x) → arcus tangens x;
    • pi 
    • radians(x) → funkcja, która konwertuje x z wartości wyrażonej w stopniach na wartość wyrażoną w radianach; 
    • degrees(x) → odwrotnie
    • sinh(x) → hiperboliczny sinus; 
    • cosh(x) → hiperboliczny cosinus; 
    • tanh(x) → hiperboliczny tangens; 
    • asinh(x) → the hiperboliczny arcus sinus; 
    • acosh(x) → hiperboliczny arcus sinus; 
    • atanh(x) → hiperboliczny arcus tangens.
    • e → stała o wartości stanowiącej średnią wartość liczby Eulera (e) 
    • exp(x) → określanie wartości ex; 
    • log(x) → logarytm naturalny z liczby x 
    • log(x, b) → logarytm z liczby x przy podstawie b 
    • log10(x) → logarytm dziesiętny z x (dokładniejszy niż log(x, 10)) 
    • log2(x) → logarytm binarny z x (dokładniejszy niż log(x, 2)) 
    • pow(x, y) → określa wartość x^y (zwróć uwagę na domeny) 
    • ceil(x) → sufit liczby x (najmniejsza liczba całkowita większa od lub równa liczbie x) 
    • floor(x) → podłoga liczby x (największa liczba całkowita mniejsza od lub równa liczbie x) 
    • trunc(x) → wartość liczby x podana w formie liczby całkowitej (uwaga - to nie jest to samo, co funkcja ceil lub funkcja floor) 
    • factorial(x) → zwraca x! (x musi być całką i nie może być liczbą ujemną) 
    • hypot(x, y) → zwraca długość przeciwprostokątnej trójkąta prostokątnego, 
      którego długości ramion są równe wartościom x oraz y (podobnie jak sqrt(pow(x, 2) + pow(y, 2)), ale dokładniejsze) 

#########################################
MODUŁ RANDOM:

LOSOWOŚĆ:
Algorytmy nie są losowe - są deterministyczne i przewidywalne. 
Generator liczb losowych bierze wartość określaną jako ziarno, traktuje tę wartość jako wartość wejściową, 
oblicza "losową" liczbę w oparciu o ziarno (metoda obliczeń zależy od wybranego algorytmu) i zwraca nową wartość ziarna.
Element losowości może być wzmocniony poprzez ustawienie ziarna jako liczby zaczerpniętej z aktualnego czasu - 
co sprawia, że przy każdym uruchomieniu program będzie rozpoczynał swoje działanie od innej wartości ziarna (czyli użyje innych losowych liczb).
Takie rozpoczęcie działania programu jest zapewnione przez język Python poprzez import modułu random.

Funkcja o nazwie random() zwraca liczbę rzeczywistą x z zakresu (0.0, 1.0)
Wielokrotne uruchomienie procedury poniżej, spowoduje wyświetlanie tych samych wyników:

from random import random, seed 
seed(0) 
for i in range(5): 
     print(random()) 

#-----------------------------------------
from datetime import datetime
from random import random, seed
seed(datetime.now().timestamp())
for i in range(5): 
     print(random())
     
#------------------------------------------
Losowe liczby całkowite:
    • randrange(end) 
    • randrange(beg, end) 
    • randrange(beg, end, step) 
    • randint(left, right) 

(uwaga: pominięcie prawostronne)

from random import *
for i in range(25):
    print(random())               #np. 0.21948516259157602
    #print(randrange(10) )        #z pominięciem ostatniej wartości
    #print(randrange(5, 10) )
    #print(randrange(5, 10, 2) )
    #print(randint(5, 10))        #bez pominięcia
    #print(randint(0, 1))         #(jak randrange(begin, end+1)

#w/w mogą generować powtarzające się wartości
# poniższe już raczej nie:

from random import choice, sample
lst = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]  
print(choice(lst))            #wybiera "losowy" element z wprowadzonej sekwencji
print(sample(lst, 5))         #buduje listę (próbkę) składającą się z 5 elementów wylosowanych z listy lst
print(sample(lst, 10)) 

#==================================================
MODUŁ PLATFORM:

Moduł platform pozwala dotrzeć do danych dotyczących sprzętu systemu operacyjnego i informacji na temat wersji interpretera.

import platform as p
print("Platforma:\t", p.platform())
print("System:\t",    p.platform(0, 1))
print("Maszyna:\t",   p.machine())
print("Procesor:\t",  p.processor())
print("System:\t",    p.system())
print("Wersja:\t",    p.version())

print("Implementacja Pythona:\t", p.python_implementation())
print("Wersja Pythona:",end="\t\t")
for atr in p.python_version_tuple():
    print(atr, end = '.')
print();    

#-----------------------------------------------------

Kiedy moduł jest importowany, jego zawartośc jest wykonywana!!!. 
Ta inicjalizacja ma miejsce tylko jeden raz (2-krotny import nie powtarza wykonania kodu)

Zmienna __main__
    • kiedy bezpośrednio uruchamiamy plik, zmienna __name__ jest ustawiona jako __main__
    • kiedy plik jest importowany jako moduł, zmiennej __name__ zostaje przypisana 
      nazwa pliku (bez .py) 

W sekcji if __name__ == "__main__" można np. umieścić testy funkcji zawartych w module.
Będą uruchamiane tylko z modułu.

Zmienna: counter
Plik próbuje uzyskać dostęp do zmiennej licznika w module. 
    -czy jest to dozwolone? Tak. 
    -czy jest to przydatne? Tak, nawet bardzo. 
    -czy to jest bezpieczne? To zależy, czy ufamy użytkownikom swojego modułu.
Jednak możemy nie chcieć, żeby reszta świata oglądała twoją osobistą/prywatną zmienną.
Język Python nie ma sposobu pozwalającego an ukrycie takich zmiennych przed użytkownikami modułu. 
Można ich poinformować użytkowników że mogą ją czytać, ale nie powinni jej modyfikować dodając do zmiennej _zmienna_ lub __zmienna__ ,  
ale jest to tylko konwencja. 

MODUŁ:
    • wiersz, rozpoczynający się od znaków #! jest różnie nazywany - może nosić nazwę  shabang, shebang, hashbang, poundbang 
      lub nawet hashpling. Sama nazwa jest nieistotna
      Z punktu widzenia języka Python, wiersz to tylko komentarz ponieważ rozpoczyna się od znaku #. 
      Jeśli chodzi o systemy operacyjne typu Unix itp (łącznie z MacOS), taki wiersz mówi systemowi operacyjnemu 
      jak wykonać zawartość pliku (czego program potrzebuje, żeby zostać uruchomionym i żeby doszło do interpretacji tekstu). 
      W niektórych środowiskach (zwłaszcza tych związanych z serwisami internetowymi) brak takiego wiersza spowoduje kłopoty. 
    • łańcuch znaków (może nawet kilkuwierszowy) umieszczony przed instrukcjami modułu (łącznie z importami) nosi nazwę doc-string 
      i powinien zwięźle wyjaśniać cel oraz zawartość modułu; 
    • funkcje zdefiniowane wewnątrz modułu (suml() i prodl()) dostępne do zaimportowania; 

Co jeśli moduł nie znajduje się w tym samym katalogu co program?
    Język Python przeszukuje moduły w następujący sposób: 
          Python przegląda te foldery według porządku zgodnego z ich kolejnością zawartej w specjalnej zmiennej (liście) 
          o nazwie path - jeśli moduł nie może być odnaleziony w żadnym z tych katalogów, import kończy się niepowodzeniem.
          Do zmiennej, path i można dotrzeć za pośrednictwem modułu sys. 
          Jeśli którykolwiek z pozostałych modułów nosi taką samą nazwę jak szukana nazwa, zostanie zignorowany.

from sys import path
print(path)
path.append('C:\\MN\\Python\\moduly_mn')
print(path)

Można korzystać z metody insert- wtedy ścieżka nie znajdzie się na końcu.
Można do path dodawać pliki zip !

#====================================================
PAKIETY:
1. funkcje
2. moduł to typ kontenera wypełnionego funkcjami 
   (funkcje grupujemy w modułach wg zastosowania)
3. moduły grupujemy w pakietach
	a. tworzymy katalog (moduly_mn)
	b. tworzymy plik z modułem (modul_mn.py)
	c. tworzymy plik (main_mn.py)
	d. wewnątrz pliku main_mn.py robimy import modul_mn	
	e. uruchamiamy main.py
	f. powstaje katalog __pycache__
	g. a w nim plik  modul_mn.cpython-38.pyc  (nazwa_wersja, w wawnątrz na wpół skompilowany kod) 

Moduły tworzą swój własny system hierarchii, więc umieszczanie ich płaskiej strukturze nie będzie dobrym pomysłem. 
STRUKTURA DRZEWA (katalog: Pakiety) odzwierciedla wzajemne relacje między modułami i stanowi PAKIET.

extra - nazwa (i jednocześnie korzeń pakietu)
    • lokalizacja funkcji o nazwie funT() z pakietu tau może być opisana w następująco: 
	extra.good.best.tau.funT() 
    • funkcja oznaczona jako: 
	extra.ugly.psi.funP() 
        pochodzi z modułu psi w subpakiecie ugly należącym do pakietu extra. 

1. Aby przekształcić drzewo (lub jego część) w prawdziwy pakiet języka Python (nie zbiór zwykłych katalogów i plików, 
   ale zestaw modułów) należy dokonać inicjalizacji.
   Inicjalizacja modułu odbywa się poprzez niezwiązany z żadną funkcją kod (kod, który nie stanowi części żadnej funkcji), 
   a który umieszcza się wewnątrz pliku modułu. 
   Ponieważ pakiet nie jest plikiem, technika ta nie sprawdzi się w przypadku inicjalizacji pakietów.
2. Python oczekuje, że wewnątrz folderu z pakietem jest pewien plik o nazwie: __init__.py 
   Jego zawartość jest wykonywana podczas importu dowolnego modułu, wchodzącego w skład pakietu. 
   Jeśli nie potrzeba żadnych specjalnych inicjalizacji, można zostawić ten plik pusty, ale nie wolno go pominąć.
3. Nie tylko folder root (extra) może zawierać plik __init.py__ - można go również umieścić wewnątrz dowolnego subfolderu (subpakietu). 
   Może okazać się przydatny jeśli pewne subpakiety wymagają indywidualnego podejścia i specjalnych typów inicjalizacji
4. Drzewo można umieścić gdziekolwiek!

UWAGA: Pokazać moduly_mn, Pakiety i Pakiety.zip

from sys import path
path.append('C:\\MN\\Python\\Pakiety')
#print(path)

import extra.iota
print(extra.iota.FunI())

from extra.iota import FunI
print(FunI())

import extra.good.best.sigma
print(extra.good.best.sigma.FunS())

from extra.good.best.tau import FunT
print(FunT())

# to samo z aliasami:
import extra.good.best.sigma as sig
print(sig.FunS()) 

import extra.good.alpha as alp
print(alp.FunA())


#-------ZIP------------------------------
from sys import path
path.append('C:\\MN\\Python\\Pakiety.zip')

from extra.iota import FunI
print(FunI())

import extra.good.best.sigma as sig
print(sig.FunS()) 

import extra.good.alpha as alp
print(alp.FunA())

'''



























