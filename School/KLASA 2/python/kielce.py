import math

R= 6378
ka= 51


def kielce():
    while True:
        ka = float(input("Podaj szerokosc geograficzna"))
        r = math.cos(math.radians(ka)) * R
        obw = r *math.pi *2
        pred = obw /24
        print(f"Predkosc= {pred} km/h")


kielce()