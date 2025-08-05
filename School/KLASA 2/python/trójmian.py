powtorzenie = 'tak'
while powtorzenie=='tak':
    print("Liczenie trójmianu")
    print("Dany jest trójmian kwadratu postaci y=ax(2)+bx+c")
    a = float(input("wartość parametru a: "))
    b = float(input("wartość parametru b: "))
    c = float(input("wartość parametru c: "))
    if(a==0):
        print(" jest to równanie liniowe")
    else:
        d=b**2-4*a*c
        if d>0:
            x1 = (-b-d)/(2*a)
            x2 = (-b+d)/(2*a)
            print("Sa dwa pierwiastki o wartosciach ",x1," i ",x2)
        elif d==0:
            x1=-b/(2*a)
            x2=x1
            print("Sa dwa identyczne pierwiastki o wartosci",x1)
        else:
            print("Brak pierwiastkow w zbiorze liczb rzeczywistych")
    powtorzenie=input("Czy chcesz powtorzyc program? : tak/nie ")

