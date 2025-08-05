def rok_prz(rok):
    return (rok%4==0 and rok%100!=0) or (rok%400==0)

def dni_mie(rok, miesiac):
    if miesiac in [4,6,9,11]:
        return 30
    elif miesiac==2:
        return 29 if rok_prz(rok) else 28
    else:
        return 31

def dni_od_r(rok,miesiac,dzien):
    dni = dzien
    for y in range(0,rok):
        dni += 366 if rok_prz(y) else 365
    for m in range(1,miesiac):
        dni += dni_mie(rok,m)
    return dni
    
print ("Program sprawdzi ile dni minelo od podanej daty do drugiej podanej daty")
rok1 = int(input("Podaj rok 1 daty: "))
miesiac1 = int(input("Podaj miesiac 1 daty: "))
dzien1 = int(input("Podaj dzien 1 daty: "))

rok2 = int(input("Podaj rok 2 daty: "))
miesiac2 = int(input("Podaj miesiac 2 daty: "))
dzien2 = int(input("Podaj dzien 2 daty: "))

dni1=dni_od_r(rok1,miesiac1,dzien1)
dni2=dni_od_r(rok2,miesiac2,dzien2)

roznica_dni = abs(dni1-dni2)
lata=roznica_dni//365
pozostale_dni=roznica_dni%365
miesiace=pozostale_dni//30
dni=pozostale_dni%30
print("Roznica miedzy datami wynosi: ",roznica_dni," dni")
print("Czyli dokladnie: ",lata," lat, ",miesiace," miesiecy i ",dni," dni.")
