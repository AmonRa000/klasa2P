x = float(input("podaj przuchód"))
podatek = 0.0
x -= 1650
x -= 350.08
x -= x * 0.12
if x <= 85528:
    pod = 15455 + (x - 85528)* 0.18
else:
    pod = x * 0.18
pod -=pod*0.15
print("podatek wynosi", pod)