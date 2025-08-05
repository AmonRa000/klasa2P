'''
#KROTKI:
TYP SEKWENCYJNY to typ danych w Pythonie, który może przechowywać więcej niż jedną wartość 
(lub mniej niż jedną, ponieważ sekwencja może być pusta), a wartości te mogą być przeglądane 
sekwencyjnie (stąd nazwa) element po elemencie. 

SEKWENCJA to dane, które można przeskanować za pomocą pętli for.

MUTOWALNOŚĆ jest właściwością dowolnych danych Pythona, która opisuje jego gotowość do swobodnej zmiany 
podczas wykonywania programu. Istnieją dwa rodzaje danych Pythona: zmienne i niezmienne.

Dane mutowalne można dowolnie aktualizować w dowolnym momencie.
Niezmienne dane nie mogą być modyfikowane w ten sposób.
Do danych niemutowalnych nie można ani dołączyć do niego elementu, ani usunąć z niego żadnego elementu. 
Oznacza to, że dołączenie elementu na końcu listy wymagałoby odtworzenia listy od nowa.
Trzeba zbudować zupełnie nową strukturę, składającą się ze wszystkich elementów już istniejącej listy oraz nowego elementu.

Krotka jest niezmiennym typem sekwencji. Może zachowywać się jak lista, ale nie wolno jej modyfikować na miejscu. 

tuple_1 = (1, 2, 4, 8)
tuple_2 = 1., .5, .25, 'asd'
print(tuple_1)
print(tuple_2)

empty_tuple = ()
#Jednoelementowe krotki (usunięcie przecinka tworzy zmienne)
one_element_tuple_1 = (1, )
one_element_tuple_2 = 1.,
print(one_element_tuple_1)
print(one_element_tuple_2)

my_tuple = (1, 10, 100, 1000)
print(my_tuple[0])
print(my_tuple[-1])
print(my_tuple[1:])
print(my_tuple[:-2])
for elem in my_tuple:
    print(elem)

Co jeszcze mogą krotki?
     funkcja len() zwraca liczbę elementów zawartych w kortce;
     operator + może łączyć krotki
     operator * może mnożyć krotki (podobnie jak listy);
     Operatory in i not in działają w taki sam sposób, jak w listach. 

l1 = [1,2,3,4]
l2 = [5,6,7,8]
t1 = (1,2,3,4)
t2 = (5,6,7,8)
print(l1 + l2)
print(t1 + t2)
print(l1 * 2)
print(t1 * 2)

print(len(t2))
print(5 in t1)
print(-10 not in t1)

#Jedną z najbardziej przydatnych właściwości krotki jest ich zdolność do pojawiania się po lewej stronie 
operatora przypisania. (Widzieliśmy to, kiedy trzeba było znaleźć eleganckie narzędzie do zamiany wartości dwóch zmiennych). 

var = 123
t1 = (1, )
t2 = (2, )
t3 = (3, var)
t1, t2, t3 = t2, t3, t1
print(t1, t2, t3)

empty_tuple = ()
print(type(empty_tuple))    # outputs: <class 'tuple'>

#KASOWANIE KROTKI:
my_tuple = 1, 2, 3, 
del my_tuple
print(my_tuple)    # NameError: name 'my_tuple' is not defined

#--------------------------
#Extra:
#Tworzenie krotki z pomocą funkcji tuple()

my_list = [2, 4, "String"]
print(my_list)    # wyśw: [2, 4, 6]
print(type(my_list))    #  wyśw: <class 'list'>
tup = tuple(my_list)
print(tup)    # outputs: (2, 4, 6)
print(type(tup))    # wyśw: <class 'tuple'>

#i na odwrót:
my_list = list(tup)
print(my_list)
print(type(my_list))    # wyśw: <class 'list'>

#=======================================================================

#SŁOWNIKI:
Słownik nie jest to typ sekwencji, ale można go łatwo dostosować do przetwarzania sekwencji i można go modyfikować.	
Słowo, którego szukamy, nazywa się kluczem, a słowo, które otrzymujemy ze słownika, nazywa się wartością.
Oznacza to, że słownik to zestaw par klucz-wartość:
 1.   każdy klucz musi być unikalny - nie jest możliwe posiadanie więcej niż jednego klucza o tej samej wartości;
 2.   klucz może być dowolnym niezmiennym typem obiektu: może to być liczba (całkowita lub zmiennoprzecinkowa), a nawet łańcuch, ale NIE LISTA;
 3.   słownik nie jest listą - lista zawiera zbiór wartości numerowanych, natomiast słownik zawiera pary wartości;
 4.   funkcja len() działa również dla słowników - zwraca liczbę par klucz-wartość w słowniku;
 5.   słownik jest narzędziem jednokierunkowym - jeśli masz słownik angielsko-francuski, możesz poszukać francuskich odpowiedników terminów angielskich, 
      ale nie odwrotnie.

dictionary = {"cat": "chat", "dog": "chien", "horse": "cheval"}
phone_numbers = {'boss': 5551234567, 'Suzy': 22657854310}
empty_dictionary = {}

print(dictionary)
print(phone_numbers)
print(empty_dictionary)


dictionary = {123:"YYY","dog": "chien", "cat": "chat", "dog": "chien", "horse": "cheval"}
print(dictionary)

Kolejność drukowanych par może być inna niż w początkowym przypisaniu
W Pythonie 3.6x słowniki stały się domyślnie uporządkowanymi kolekcjami.
Wyniki mogą się różnić w zależności od używanej wersji Pythona.

dictionary = {"cat": "chat", "dog": "chien", "horse": "cheval"}
phone_numbers = {'boss' : 5551234567, 'Suzy' : 22657854310}
empty_dictionary = {}

print(dictionary['cat'])
print(phone_numbers['Suzy'])
print(phone_numbers['suzy']) #ERROR

#----------------------------------
pol_eng_dictionary = {
    "kwiat": "flower",
     "woda": "water",
    "gleba": "soil"
    }

item_1 = pol_eng_dictionary["gleba"]    # ex. 1
print(item_1)    # outputs: soil

item_2 = pol_eng_dictionary.get("woda")
print(item_2)    # outputs: water

#-----------------------------------
Uwaga:
     jeśli klucz jest ciągiem, musisz określić go jako ciąg;
     w kluczach rozróżniana jest wielkość liter: „Suzy” to coś innego niż „suzy”. 


dictionary = {"cat": "chat", "dog": "chien", "horse": "cheval"}
words = ['cat', 'lion', 'horse']
for word in words:
    if word in dictionary:
        print(word, "-->", dictionary[word])
    else:
        print(word, "is not in dictionary")

#Zawieszone wcięcia:
dictionary = {
              "cat": "chat",
              "dog": "chien",
              "horse": "cheval"
              }
phone_numbers = {'boss': 5551234567,
                 'Suzy': 22657854310
                 }
Czy słowniki można przeglądać za pomocą pętli for, na przykład list lub krotek?
NIE, ponieważ słownik nie jest sekwencją — pętla for jest z nim bezużyteczna.
i jednocześnie
TAK, ponieważ istnieją proste i bardzo skuteczne narzędzia, które mogą dostosować dowolny słownik 
do wymagań pętli for (innymi słowy, budowanie pośredniego połączenia między słownikiem a tymczasową encją sekwencyjną).
#------------------
#Metoda keys():

dictionary = {"dog": "chien", "horse": "cheval","cat": "chat"}
for key in dictionary.keys():
    print(key)
#-------------------

#Funkcja sorted():
#to samo w sposób posortowany:
for key in sorted(dictionary.keys()):
    print(key, "==>", dictionary[key])
#-------------------

#items():
dictionary = {"cat": "chat", "dog": "chien", "horse": "cheval"}
for english, french in dictionary.items():
    print(english, "->", french)
#-----------------------
#values():
for french in dictionary.values():
    print(french)

#-----------------------
#Modyfikacja słownika:
dictionary = {"cat": "chat", "dog": "chien", "horse": "cheval"}
dictionary['cat'] = 'minou'
print(dictionary)

#Dodanie elementu:
dictionary['swan'] = 'cygne'
print(dictionary)

#lub:
dictionary.update({"cow": "vache"})

#Usunięcie elementu:
del dictionary['dog']
print(dictionary)

#LUB usunięcie ostatniego elementu:
dictionary.popitem()
print(dictionary) # outputs: {'cat': 'chat', 'dog': 'chien'}

W starszych wersjach Pythona, tj. przed 3.6.7, metoda popitem() usuwa losowy element ze słownika. 
#-----------------------------------------
2024-11-14:

#Przykł.1:
#Co się wyświetli?:

tup = 1, 2, 3, 4
a, b, c, D = tup
print(a, b, c, D)

#Funkcja count():
tup = 1, 2, 3, 2, 4, 5, 6, 2, 7, 2, 8, 9
duplicates = tup.count(2)
print(duplicates)    # outputs: 4

#Funkcja update():
d1 = {'Adam Smith': 'A', 'Judy Paxton': 'B+'}
d2 = {'Mary Louis': 'A', 'Patrick White': 'C'}
d3 = {}
for item in (d1, d2):
    d3.update(item)
print(d3)
#-------------------------
#Konwersja krotek na słownik:
colors = (("green", "#008000"), ("blue", "#0000FF"))
colors_dictionary = dict(colors)
print(colors_dictionary)

#-----------------------------------------

#ĆWICZENIE1:
#1:
pol_eng_dictionary = {
    "zamek": "castle",
    "woda": "water",
    "gleba": "soil"
    }

pol_eng_dictionary["zamek"] = "lock"
item = pol_eng_dictionary["zamek"]    
print(item)  # outputs: lock

#-----------------------------------------
#ĆWICZENIE 2:

phonebook = {}    # an empty dictionary
phonebook["Adam"] = 3456783958    # create/add a key-value pair
print(phonebook)    # outputs: {'Adam': 3456783958}

del phonebook["Adam"]
print(phonebook)    # outputs: {}

#-----------------------------------------
#ĆWICZENIE 3:
pol_eng_dictionary = {"kwiat": "flower"}
pol_eng_dictionary.update({"gleba": "soil"})
print(pol_eng_dictionary)    # outputs: {'kwiat': 'flower', 'gleba': 'soil'}
pol_eng_dictionary.popitem()
print(pol_eng_dictionary)    # outputs: {'kwiat': 'flower'}

#-----------------------------------------
#ĆWICZENIE 4 iteracje:

pol_eng_dictionary = {
    "zamek": "castle",
    "woda": "water",
    "gleba": "soil"
    }
for key in pol_eng_dictionary:
    print(key) 
for key, value in pol_eng_dictionary.items():
    print("Pol/Eng ->", key, ":", value)

if "zamek" in pol_eng_dictionary:
    print("Yes")
else:
    print("No")

print(len(pol_eng_dictionary))    # wyśw: 3
del pol_eng_dictionary["zamek"]   # usuń pozycjęitem
print(len(pol_eng_dictionary))    # wyśw: 2
pol_eng_dictionary.clear()        # usuwa wszystkie pozycje
print(len(pol_eng_dictionary))    # wyśw: 0
copy_dictionary = pol_eng_dictionary.copy()
del pol_eng_dictionary            # usuwa słownik
print(copy_dictionary)

#---------------------------------
#ĆWICZENIE 5 iteracje:

#Co się wyświetli?
my_dict = {"A": 1, "B": 2}
kopia_my_dict = my_dict.copy()
my_dict.clear()
print(kopia_my_dict)
#-------------------------
#ĆWICZENIE 5 iteracje:
'''
colors = {
    "white": (255, 255, 255),
    "grey": (128, 128, 128),
    "red": (255, 0, 0),
    "green": (0, 128, 0),
    "black": (0, 0, 0)
    }
for col, rgb in colors.items():
    print(col, ":", rgb)
    '''
#---------------------------------
'''


