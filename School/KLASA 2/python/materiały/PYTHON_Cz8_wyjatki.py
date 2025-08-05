'''
#WYJĄTKI:
#Prawa Murpyego
#The program failed successfully
#Błędy w danych i programach
#------------------------------
#1:
value = int(input('Wprowadź liczbę: '))
print('Odwrotność', value, 'to', 1/value)
#------------------------------
#2:

liczba1 = int(input("Wprowadź pierwszą liczbę: "))
liczba2 = int(input("Wprowadź drugą liczbę: "))
if liczba2 != 0: 
    print(liczba1 / liczba2)
else:
    print("Ta operacja nie może być wykonana.")
print("KONIEC.")

#------------------------------
Za każdym razem, gdy twój kod próbuje zrobić coś 
złego/głupiego/nieodpowiedzialnego/szalonego/niewykonalnego, język Python robi dwie rzeczy:
    • zatrzymuje twój program; 
    • tworzy specjalny rodzaj danych, zwany wyjątkiem. 
Obie te czynności są nazywane zgłaszaniem wyjątku. 
Możemy powiedzieć, że język Python zawsze zgłasza wyjątek (lub że wyjątek został zgłoszony), 
gdy nie ma pojęcia, co zrobić z twoim kodem.
Co dzieje się dalej?
    • zgłoszony wyjątek czeka, aż ktoś go zauważy i zajmie się nim; 
    • jeśli nikt się nie zajmie zgłoszonym wyjątkiem, program zostanie przymusowo zakończony 
      i zobaczysz komunikat o błędzie wysłany do konsoli przez język Python; 
    • jeśli jednak ktoś zajmie się wyjątkiem i odpowiednio go obsłuży, zawieszony program zostanie 
      wznowiony, a jego wykonywanie będzie kontynuowane. 
Język Python dostarcza efektywnych narzędzi, które pozwalają obserwować wyjątki, identyfikować i obsługiwać je sprawnie. 
Jest to możliwe dzięki temu, że wszystkie potencjalne wyjątki mają swoje jednoznaczne nazwy, 
więc możesz je kategoryzować i odpowiednio reagować.

#------------------------------
Brak obsługi:

value = 1
value /= 0
#------------------------------
#Blok try catch:
try:
    # Tu umieszczmy kod do wykonania
    # może być bylejaki 
except:
    # Tu umieszczmy żal za grzechy
    # jeśli coś poszło nie tak

• słowo kluczowetry rozpoczyna blok kodu, który może działać poprawnie lub niepoprawnie; 
• następnie język Python próbuje wykonać ryzykowne działanie; jeśli się nie powiedzie, 
  zostanie zgłoszony wyjątek i język Python zacznie szukać rozwiązania; 
• słowo kluczowe except uruchamia fragment kodu, który zostanie wykonany, jeśli coś 
  w bloku try pójdzie nie tak - jeśli wewnątrz poprzedniego bloku try zostanie zgłoszony wyjątek, 
  tutaj wystąpi błąd, zatem kod znajdujący się za słowem kluczowym except powinien zapewnić odpowiednią reakcję na zgłoszony wyjątek; 
• powrót do poprzedniego poziomu zagnieżdżania kończy sekcję try-except. 

#------------------------------
#1a:

try:
    value = int(input('Wprowadź liczbę: '))
    print('Odwrotność ', value, 'to', 1/value)        
except:
    print('Sam sobie oblicz, jak jesteś taki mądry')

#------------------------------
#2a:
liczba1 = int(input("Wprowadź pierwszą liczbę: "))
liczba2 = int(input("Wprowadź drugą liczbę: "))
try:
    print(liczba1 / liczba2)
except: 
    print("Ta operacja nie może być wykonana.")

print("KONIEC.")
#---------------------------------------------------------------

#Dwa wyjątki:

• gałęzie except są przeszukiwane w tej samej kolejności, w jakiej pojawiają się w kodzie; 
• nie wolno używać więcej niż jednej gałęzi except o danej nazwie wyjątku; 
• liczba różnych gałęzi except jest dowolna - jedynym warunkiem jest to, że jeśli używasz try, 
  musisz umieścić po nim co najmniej jeden except (nazwany lub nie); 
• słowo kluczowe except nie może zostać użyte bez poprzedzającego try; 
• jeśli zostanie wykonana którakolwiek z gałęzi except, inne gałęzie nie zostaną przejrzane; 
• jeśli żadna z określonych gałęzi except nie pasuje do zgłoszonego wyjątku, wyjątek ten pozostanie nieobsłużony
• jeśli istnieje gałąź except bez nazwy (bez nazwy wyjątku), to musi ona być określona jako ostatnia. 

• ZeroDivisionError to specjalny przypadek bardziej ogólnej klasy wyjątku zwanej ArithmeticError; 
• ArithmeticError to specjalny przypadek bardziej ogólnej klasy wyjątku zwanej Exception; 
• Exception to specjalny przypadek bardziej ogólnej klasy wyjątku zwanej BaseException; 

Możemy to opisać w następujący sposób (kierunek strzałek wskazuje na bardziej ogólny element):

BaseException 
	↑ 
Exception 
	↑ 
ArithmeticError 
	↑ 
ZeroDivisionError

#-----ŹLE !!!-------
try: 
    y = 1 / 0 
except ArithmeticError: 
    print("Problem arytmetyczny!") 
except ZeroDivisionError: 
    print("Dzielenie przez Zero!") 
print("KONIEC.") 


Zmiana jest radykalna - wynik kodu to teraz:
Problem arytmetyczny! KONIEC. 

Dlaczego tak się stało, jeśli zgłoszony wyjątek jest taki sam, jak poprzednio?
Wyjątek jest taki sam, ale bardziej ogólny wyjątek jest teraz wymieniony jako pierwszy - 
  będzie on również przechwytywał wszystkie przypadki dzielenia przez zero. 
Czyli nie ma szans, żeby jakikolwiek wyjątek wpadł w gałąź ZeroDivisionError. 
Ta gałąź jest teraz całkowicie nieosiągalna.

# Dobrze:
    • kolejność gałęzi ma znaczenie! 
    • nie umieszczaj bardziej ogólnych wyjątków przed bardziej konkretnymi; 
    • taki ruch sprawi, że ta druga gałąź będzie niedostępna i bezużyteczna; 
    • co więcej, spowoduje to, że twój kod będzie nieuporządkowany i niespójny; 
    • Język Python nie wygeneruje żadnych komunikatów o błędach dotyczących tego problemu. 

try:
    y = 1 / 0
except ZeroDivisionError:
    print("Dzielenie przez Zero!")
except ArithmeticError: 
    print("Inny problem arytmetyczny!") 

print("KONIEC.")

#------------------------------------------
# Drzewko wyjątków:

def wyswietl_drzewko(klasa, zagniezdzenie = 0):
    if zagniezdzenie > 1:
        print("   |" * (zagniezdzenie - 1), end="")
    if zagniezdzenie > 0:
        print("   +---", end="")
    print(klasa.__name__)
    for podklasa in klasa.__subclasses__():
        wyswietl_drzewko(podklasa, zagniezdzenie +1)
wyswietl_drzewko(BaseException)

#------------------------------------------
(znależć i usunąć błąd)

cyfry = (('###', '  #', '###', '###', '# #', '###', '###', '###', '###', '###'),
         ('# #', '  #', '  #', '  #', '# #', '#  ', '#  ', '  #', '# #', '# #'),
         ('# #', '  #', '###', '###', '###', '###', '###', '  #', '###', '###'),
         ('# #', '  #', '#  ', '  #', '  #', '  #', '# #', '  #', '# #', '  #'),
         ('###', '  #', '###', '###', '  #', '###', '###', '  #', '###', '###'))

	

def printNumer(num):
    """Funkcja przyjmuje jako argument liczbę całkowitą lub ciąg znaków,
    dający przetworzyć się na liczbę całkowitą.
    Następnie drukuje na eranie wczytaną wartość w formie cyfr wyswietlacza 7-segmentowego
    """
    for line in range(5):                            # mamy 5 linii w naszym wyswietlaczu
        for digit in str(num): 
            print(cyfry[line][int(digit)], end=' ')  # drukuje fragment cyfry
        print()  

def getNumber():
    """ Funkcja pobiera od użytkownika ciąg znaków
    do czasu wczytania ciągu składającego się z samych cyfr,
    lub przerwania poprzez KeyboardInterrupt.
    """
    try:
        numer = input("Podaj liczbę, którą chcesz wyświetlić: ")
        assert numer.isdigit()
        return numer
    except AssertionError:
        print("ERROR! - Podana wartość nie jest liczbą.")
        getNumber()
    except:
        print("ERROR! - Nieznany błąd.")
        getNumber()

liczba = getNumber()
printNumer(liczba)

#----------------------------------------
# Program liczący sumę liczb

sekwencja = input("Podaj sekwencję liczb - oddziel je spacjami: ")
strings = sekwencja.split()
total = 0
try:
    for substr in strings:
        total += float(substr)
    print("Suma wynosi:", total)
except:
    print(substr, "to nie jest liczba.")

#--------------------------------------

#Wyjątek w funkcji:
Jeśli wyjątek zostanie zgłoszony wewnątrz funkcji, może zostać obsłużony:
    • wewnątrz funkcji; 
    • poza funkcją; 

def zlaFun(n): 
    return 1 / n 

try: 
    zlaFun(0) 
except ArithmeticError: 
    print("Co sie stalo? Zgloszono wyjatek!") 
print("KONIEC.") 

#------------------
lub:

def zlaFun(n):
    try:
        return 1 / n
    except ArithmeticError:
        print("Problem Arytmetyczny!")
    return None

zlaFun(0)
print("KONIEC.") 

#-------------------------------

raise exc 
Uwaga: raise jest słowem kluczowym.
Instrukcja ta umożliwia:
    • symulację zgłaszania rzeczywistych wyjątków (np. w celu przetestowania strategii ich obsługi) 
    • częściowo obsługę wyjątku i przełożenie odpowiedzialności za ukończenie obsługi na inną część kodu (separacja zagadnień). 

W ten sposób można przetestować swoją procedurę obsługi wyjątków bez zmuszania kodu do robienia głupich rzeczy.

def zlaFun(n):
    raise ZeroDivisionError
try:
    zlaFun(0)
except ArithmeticError:
    print("Co sie stalo? Blad?")
print("KONIEC.")

#-------------------

raise 
Jest jedno poważne ograniczenie: ten rodzaj instrukcji raise może być użyty wyłącznie wewnątrz gałęzi except; 
  używanie go w jakimkolwiek innym kontekście powoduje błąd.
Instrukcja natychmiast ponownie zgłosi ten sam wyjątek, który jest aktualnie obsługiwany.

Dzięki temu możesz podzielić obsługę wyjątków pomiędzy różne części kodu.

ZeroDivisionError jest zgłoszony dwukrotnie:
    • po raz pierwszy, w części kodu try (jest to spowodowane rzeczywistym dzieleniem przez zero) 
    • po raz drugi, w części except przez instrukcję raise. 
W efekcie kod wyświetla:
Zrobilem to ponownie! Rozumiem! KONIEC. 

def zlaFun(n):
    try:
        return n / 0
    except: 
        print("Zrobiłem dzielenie przez 0!")
        raise
try:
    zlaFun(0)
except ArithmeticError: 
    print("Ponowne wywołanie")

print("KONIEC.")

#=========================================

WŁASNE WYJĄTKI:
A)
def celsius2kelvin(par):
    if par < -273.15:
        print("Błąd")
        return None
    return par + 273.15

print(celsius2kelvin(-300))

#--------------------------------------
B)

class Cel2KelException(Exception):
    pass

def celsius2kelvin(par):
    if par < -273.15:
        raise Cel2KelException()
    return par + 273.15

try:
    print(celsius2kelvin(-300))
except Cel2KelException:
    print("Zbyt niska temperatura")

#--------------------------------------
C)  TO JESZCZE NIE TERAZ:  :)
class Cel2KelException(Exception):
    def __init__(self, temp):
        super().__init__("Temperatura {} poniżej zera bezwzględnego".format(temp))        

def celsius2kelvin(par):
    if par < -273.15:
        raise Cel2KelException(par)
    return par + 273.15

try:
    print(celsius2kelvin(-300))
except:
    print("Zimno jak diabli")
#--------------------------------------

ELSE
Czasem może się okazać, że kod, który miał wywołać wyjątek, nie wywołał go.
Gdy potrzebujemy obsłużyć taki przypadek, stosujemy dodatkowo else,
w którym kod zostanie wywołany, gdy żaden wyjątek się nie pojawi.
Dla przykładu gdy poprawimy nasz try na poprawny kod, wyjątek się nie pojawi,
więc otrzymamy komunikat z sekcji else.

FINALLY
Nareszcie! Gdy wykonamy operację oraz obsłużymy wyjątki, oraz sytuacje jego braku,
możemy zakończyć obsługę. Gdyby jednak okazało się, że potrzebujemy coś wykonać zawsze
po tej obsłudze, skorzystać można z finally.
Kod w tej sekcji zostanie uruchomiony zawsze na zakończenie, nie można od jego egzekucji uciec.
Przydaje się to gdy musimy zamknąć jakieś źródło, albo przesłać pewien log.

try:
    1/10
except ZeroDivisionError:
    print("Dzielenie przez zero")
except ArithmeticError:
    print("Inny błąd arytmetyczny")
except:
    print("Nieznany błąd")
else:
    print("Jest OK")
finally:
    print("Tak czy siak")

#-------------------------------------------

wyrazenie assert 
Jak działa?
    • Analizuje wyrażenie; 
    • jeśli wyrażenie zwraca wartość True, lub niezerową wartość liczbową, 
      lub niepusty łańcuch znaków, lub jakąkolwiek wartość inną niż None, nie zrobi niczego więcej; 
    • w przeciwnym razie, automatycznie i natychmiast zgłosi wyjątek o nazwie AssertionError 
      (w tym przypadku mówimy, że instrukcja assert się nie powiodła) 
Jak to wykorzystać?
    • możesz umieścić instrukcję w swoim kodzie, kiedy chcesz być całkowicie chroniony przed ewidentnie błędnymi danymi 
      i kiedy nie masz absolutnej pewności, że dane zostały wcześniej dokładnie sprawdzone (np. wewnątrz funkcji używanej przez kogoś innego) 
    • zgłoszenie wyjątku AssertionError zabezpiecza twój kod przed wygenerowaniem nieprawidłowych wyników i wyraźnie pokazuje charakter błędu; 
    • instrukcje assert nie zastępują wyjątków ani nie potwierdzają danych - są ich dodatkami. 
Jeśli wyjątki i sprawdzanie danych porównamy do ostrożnej jazdy, instrukcja assert może pełnić rolę poduszki powietrznej.

Program działa bezbłędnie, jeśli wprowadzisz poprawną wartość liczbową większą lub równą zero; 
w przeciwnym razie zatrzyma się i wyświetli następujący komunikat:
Traceback (most recent call last): File ".main.py", line 4, in assert x >= 0.0 AssertionError 

try:
    import math 
    x = float(input("Wprowadz liczbe: "))
    assert x >= 0.0
    x = math.sqrt(x)
    print(x)
except ImportError:
    print("Błąd importu")
except ValueError:
    print("Błąd wartości")
except AssertionError:
    print("Błąd asercji")
except:
    print("iNNY błąd")
else:
    print("Jest gicio")
finally:
    print("koniec")
    
   
#----------------------------------------------

# Przykłady wykorzystania instukcji assert

import math

try:
    x = float(input("Enter a number: "))
    # assert x >= 0.0
    if (x<0):
        raise ValueError("Podaj liczbę dodatnią")
    x = math.sqrt(x)
    print(x)
except AssertionError:
    print("zła liczba")
except:
    print("Inny błąd...")

#-------------------------------------------

def readint(prompt, min, max):
    try:
        val = int(input(prompt))
        assert min <= val <= max
        return val
    except ValueError:
        print("Error: wrong input")
        return readint(prompt, min, max)
    except AssertionError:
        print("Error: the value is not within permitted range ({}..{})".format(min, max))
        return readint(prompt, min, max)
v = readint("Enter a number from -10 to 10: ", -10, 10)
print("The number is:", v)

#----------------------------------------------
Wbudowane wyjątki (63 wyjątki tworzą strukturę o kształcie drzewa):

Wyjątki są częścią rutyny i czymś tak normalnym jak każdy inny aspekt z życia programisty.
Dla każdego wyjątku, mamy:
    • jego nazwę; 
    • jego umiejscowienie na drzewku wyjątków; 
    • krótki opis; 
    • zwięzły fragment kodu ukazujący okoliczności, w których można wywołać wyjątek. 
#------------------
1. ArithmeticError
Lokalizacja: BaseException ← Exception ← ArithmeticError
Opis: wyjątek, w którego skład wchodzą wszystkie wyjątki spowodowane przez arytmetyczne operacje,
      takie jak dzielenie przez zero lub nieprawidłowa domena argumentu
#------------------
2. AssertionError
Lokalizacja: BaseException ← Exception ← AssertionError
Opis: konkretny wyjątek wywołany przez instrukcję asercji, kiedy jej argument sprowadza się do wartości False, None, 0 lub niepustego łańcucha znaków
Przykładowy kod:
from math import tan, radians 
try:
    kat = int(input('Wprowadz kat podany w stopniach: ')) # musimy byc pewni, ze kat != 90 + k * 180 
    assert kat % 180 != 90 
    print(tan(radians(kat)))
except AssertionError:
    print("Błąd")
print("koniec")    
#------------------
BaseException
Lokalizacja:BaseException
Opis: najbardziej ogólny ze wszystkich wyjątków języka Python - wszystkie pozostałe wyjątki 
      zawierają się właśnie w tym wyjątku; można stwierdzić, że następujące dwie gałęzie except są sobie równe: except: i except BaseException:.
#------------------
IndexError
Lokalizacja:BaseException ← Exception ← LookupError ← IndexError
Opis:konkretny wyjątek wywołany, kiedy próbujesz uzyskać dostęp do nieistniejącego elementu sekwencji (np. elementu listy)
Kod: # kod pokazuje dziwaczny sposob # opuszczania petli 
lista = [1, 2, 3, 4, 5] 
ix = 0 
zrobTo = True 
while zrobTo:
    try: 
        print(lista[ix])
        ix += 1 
    except IndexError: 
        zrobTo = False
print('Zrobione')
#------------------
KeyboardInterrupt
Lokalizacja: BaseException ← KeyboardInterrupt
Opis: konkretny wyjątek wywołany kiedy użytkownik korzysta ze skrótu klawiaturowego przeznaczonego do zakończenia wykonywania programu 
      (Ctrl-C w przypadku większości systemów operacyjnych); jeśli obsługa tego wyjątku nie prowadzi do zakończenia działania programu, 
      działanie programu jest kontynuowane. Uwaga: ten wyjątek nie ma swojego źródła w klasie Exception. Uruchom program w IDLE.
Kod:# dzialanie tego kodu nie moze zostac zakonczone # poprzez wcisniecie Ctrl-C 
'
from time import sleep 
sekundy = 0 
while True: 
    try: 
        print(sekundy) 
        sekundy += 1 
        sleep(1) 
    except KeyboardInterrupt: 
        print("A guzik!")
       
#------------------
LookupError
Lokalizacja:BaseException ← Exception ← LookupError
Opis: abstrakcyjny wyjątek, do którego zaliczają się wszystkie wyjątki spowodowane przez błędy wynikające 
      z nieprawidłowych odniesień do innych kolekcji (list, słowników, krotek, itp.)
#------------------
MemoryError
Lokalizacja: BaseException ← Exception ← MemoryError
Opis: konkretny wyjątek wywołany kiedy operacja nie może zostać ukończona powodu braku wolnej pamięci
Kod:
# ten blad powoduje wyjatek MemoryError 
# ostrzezenie: wywolanie tego kodu moz byc istotne # dla twojego OS 
# nie uruchamiaj go w srodowisku produkcyjnym! 
string = 'x'
try: 
    while True: 
        string = string + string 
        print(len(string)) 
except MemoryError: 
    print('Brak pamięci!')
#------------------
OverflowError
Lokalizacja: BaseException ← Exception ← ArithmeticError ← OverflowError
Opis: konkretny wyjątek wywołany kiedy wynikiem operacji jest liczba, która jest za duża, żeby mogła być z powodzeniem przechowywana
Kod: # kod wyswietla kolejne # wartosci exp(k), k = 1, 2, 4, 8, 16, ... 

from math import exp 
ex = 1 
try: 
    while True: 
        print(exp(ex)) 
        ex *= 2 
except OverflowError: 
    print('Liczba jest za duza.')
    
#------------------
ImportError
Lokalizacja:BaseException ← Exception ← StandardError ← ImportError
Opis:konkretny wyjątek wywołany przez nieudaną operację importowania
Kod: # jeden z tych importow zawiedzie - ktory? 
try: 
    import math
    import time
    import abracadabra 
except: 
    print('Jeden z twoich importow nie powiodl sie.')

#------------------
KeyError
Lokalizacja: BaseException ← Exception ← LookupError ← KeyError
Opis: konkretny wyjątek wywołany, kiedy próbujesz uzyskać dostęp do nieistniejącego elementu kolekcji (np. elementu słownika)
Kod: 
# jak naruszyc slownik 
# jak sobie z tym radzic

dict = { 'a' : 'b', 'b' : 'c', 'c' : 'd' } 
ch = 'a' 
try: 
    while True: 
        ch = dict[ch] 
        print(ch) 
except KeyError: 
    print('Brak klucza:', ch) 

'''
