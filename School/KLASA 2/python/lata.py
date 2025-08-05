def rok_przestepny(rok):
    return (rok%4==0 and rok%100!=0) or (rok%400==0)

def dni_miesiecy(rok, miesiac):
    if miesiac in [4,6,9,11]:
        return 30
    elif miesiac==2:
        return 29 if rok_przestepny(rok) else 28
    else:
        return 31

def dni_od_roku(rok,miesiac,dzien):
    dni=dzien
    for y in range(0,rok):
        dni += 366 if rok_przestepny(y) else 365
    for m in range(1,miesiac):
        dni = dni + dni_miesiecy(rok,m)
    return dni

rok1 = int(input(""))
miesiac1 = int(input(""))
dzien1 = int(input(""))

rok2 = int(input(""))
miesiac2 = int(input(""))
dzien2 = int(input(""))

dni1 = dni_od_roku(rok1,miesiac1,dzien1)
dni2 = dni_od_roku(rok2,miesiac2,dzien2)

roznica_dni = abs(dni1-dni2)
lata=roznica_dni // 365
pozostale_dni=roznica_dni % 365
miesiace=pozostale_dni // 30
dni=pozostale_dni % 30
