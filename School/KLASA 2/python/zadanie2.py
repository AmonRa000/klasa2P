x = float(input("podaj szerokosc opon[mm] "))
y = float(input("podaj procent wysokosci[%] "))
z = float(input("podaj srednice opon[cale] "))
z *=2.54*z
pom = z + 2*(x * y)
z + z +pom
r = x/2
obw = 2*3.14 * r
print("średnica opony =",r," Obwod = ",obw)