'''
#Instr.warunkowa:

if pogoda_OK:
    idz_na_spacer()
    baw_sie_dobrze()
else:
    idz_do_kina()
    miłego_oglądania()
zjedz_sniadanie()


if pogoda_OK:
    idz_na_spacer()
    baw_sie_dobrze()
elif: są_dostępne _bilety:
    idz_do_kina()
    miłego_oglądania()
elif: jest_wolny_stolik:
    idz_do_restauracji()
    zjedz_sniadanie()
else:
    graj_w_szchy_w_domu()



zagnieżdżone if:
if pogoda_OK:
    if Jest_fajna_knajpka:
        zjedz_śniadanie()
    else:
        zjedz_kanapkę()
else:
    if są_bilety:
        idź_do_teatru()
    else:
        idź_na_zakupy()
 



if pogoda_OK:
    pass
elif: są_dostępne _bilety:
    pass
elif: jest_wolny_stolik:
    pass
else:
    pass


#1.    nie może być else bez uprzedniego if;
#2.    else jest zawsze ostatnią gałęzią kaskady, bez względu czy jest elif czy nie;
#3.    else jest opcjonalne i może być pominięte
#4.    jeśli jest else w kaskadzie, tylko 1 z gałęzi będzie wykonana;
#5.    jeśli nie ma else jest możliwe, że żadna gałąź sie nie wykona.


a single if statement, e.g.:

x = 10
if x == 10: # condition
    print("x jest równe 10")     # Executed if the condition is True.

#-------

a series of if statements, e.g.:

x = 10
if x > 5:                         # 1 warunek
    print("x jest większe od 5")  # jeśli 1 warunek  jest True.
if x < 10:                        # 2 warunek
    print("x jest mniejsze niż 10")    # jeśli 2 warunek jest True.
if x == 10:                       # 3 warunek
    print("x jest równe 10")      # jeśli 2 warunek jest True.

#-------

#Instrukcja if-else:

x = 10
if x < 10:  # warunek
    print("x jest mniejsze od 10")  # jeśli warunek jest True.
else:
    print("x jest większe lub równe 10")  # jeśli warunek jest False.

#-------
Seria warunków z else:

x = 10
if x > 5:  # True
    print("x > 5")
if x > 8:  # True
    print("x > 8")
if x > 10:  # False
    print("x > 10")
else:
    print("else będzie wykonane")
#---

#Zagnieżdżone warunki:

x = 10
if x > 5:  # True
    if x == 6:  # False
        print("zagnieżdżone: x == 6")
    elif x == 10:  # True
        print("zagnieżdżone: x == 10")
    else:
        print("zagnieżdżone: else")
else:
    print("else")

#======================================
Pytania:
x, y, z = 5, 10, 8

print(x > z)
print((y - 5) == x)
#------------

x, y, z = 5, 10, 8
x, y, z = z, y, x

print(x > z)
print((y - 5) == x)

#-----------

x = 10

if x == 10:
    print(x == 10)
if x > 5:
    print(x > 5)
if x < 10:
    print(x < 10)
else:
    print("else")

#-------------

x="1"
if x == 1:
    print("one")
elif x == "1":
    if int(x) > 1:
        print("two")
    elif int(x) < 1:
        print("three")
    else:
        print("four")
if int(x) == 1:
    print("five")
else:
    print("six")

#-----------

x = 1
y = 1.0
z = "1"

if x == y:
    print("one")
if y == int(z):
    print("two")
elif x == y:
    print("three")
else:
    print("four")

#-------------------------------------

INSTRUKCJA W WIELU LINIACH:
print ('To jest bardzo długa linia,'  \
  'ale nie chcemy jej dzielić na mniejsze linie.')
print ('To też działa?',
       'Nie wiedziałem!')
       
x = 10
if x == 10 or x > 0 or \
       x < 100:
       print ('True')

a=1+\
      2+\
3
print(a)

#-------------------------------------
'''