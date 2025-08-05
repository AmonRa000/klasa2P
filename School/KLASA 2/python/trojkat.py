import math
a = int(input("Podaj bok a: "))
b = int(input("Podaj bok b: "))
c = int(input("Podaj bok c: "))
pole = 0
h = a * 3 - math.sqrt(2)

def CzyTrojkat():
    if (a+b>c and a+c>b and c+b>a):
        return True
    else:
        return False

def RodzajTrojkata():
    if(a == b and a == c):
        print("To jest trojkat Rownoboczny")
    elif(a == b or b == c or c == a):
        print("To jest trojkat Rownoramienny")
    else:
        print("To jest trojkat Roznoboczny")

def CzyProstokatny():
    if(a**2 + b**2 == c**2 or b**2 + c**2 == a**2 or c**2 + a**2 == b**2):
        print("To jest trojkat Pitagorejski i Prostokatny")

def ObliczPole():
    pole = (a*h)/2
    pole = round(pole,3)
    print("Pole wynosi:", pole)

if(CzyTrojkat == True):
    RodzajTrojkata()
    CzyProstokatny()
    ObliczPole()
else:
    print("To nie jest trojkat")


        