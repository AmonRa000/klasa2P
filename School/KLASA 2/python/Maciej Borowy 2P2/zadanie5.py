pi="3,14159265358979323846264338327950288419716939937510582097494459230781640628620899862803482534211706798214808651328230664709384460955058223172535940812848111745028410270193852110555964462294895493038196" 
e="2,71828182845904523536028747135266249775724709369995957496696762772407663035354759457138217852516642742746639193200305992181741359662904357290033429526059563073813232862794349076323382988075319525101901"
PT="""Słońce ostatnich kresów nieba dochodziło, Mniej silnie, ale szerzej niż we dnie świeciło, Całe zaczerwienione, jak zdrowe oblicze Gospodarza, gdy prace skończywszy rolnicze Na spoczynek powraca. Już krąg promienisty Spuszcza się na wierzch boru i już pomrok mglisty, Napełniając wierzchołki i gałęzie drzewa, Cały las wiąże w jedno i jakoby zlewa; I bór czernił się na kształt ogromnego gmachu, Słońce nad nim czerwone jak pożar na dachu.Wtem zapadło do głębi; jeszcze przez konary Błysnęło, jako świeca przez okiennic szpary, I zgasło. I wnet sierpy gromadnie dzwoniące We zbożach, i grabliska suwane po łące, Ucichły i stanęły: tak pan Sędzia każe, U niego ze dniem kończą pracę gospodarze. «Pan świata wie, jak długo pracować potrzeba; Słońce, Jego robotnik, kiedy znijdzie z nieba, Czas i ziemianinowi ustępować z pola». Tak zwykł mawiać pan Sędzia, a Sędziego wola Była Ekonomowi poczciwemu świętą; Bo nawet wozy, w które już składać zaczęto Kopę żyta, niepełne jadą do stodoły: Cieszą się z niezwyczajnej ich lekkości woły."""

def sprawd_czy_poprwne(zmienna, wpisana):
    return zmienna.startswith(wpisana)

print("Progam sprawdzi czy podany ciąg znaków zgadza się z daną zmienną")

wpisana = input("Podaj tyle cyfr pi ile umiesz: ")
if(sprawd_czy_poprwne(pi,wpisana)):
    print("Poprwanie")
else:
    print("Gdzieś się pomyliłeś")

wpisana = input("Podaj tyle cyfr e ile umiesz: ")
if(sprawd_czy_poprwne(e,wpisana)):
    print("Poprwanie")
else:
    print("Gdzieś się pomyliłeś")

wpisana = input("Podaj tyle słów wiersza ile umiesz (poprawność ortograficzna wymagana): ")
if(sprawd_czy_poprwne(PT,wpisana)):
    print("Poprwanie")
else:
    print("Gdzieś się pomyliłeś")