#include<iostream>
#include<cmath>
using namespace std;
struct klasa{
string nazwa;
int ilosc;
};

int main() {
    int bus=23;
    int suma, busy;
    int wynik;
    klasa kl3,kl2,kl1={"P",33};
    kl2.nazwa="AB";
    kl2.ilosc=29;
    cout<<"Podaj nazwe 3 klasy"<<endl;
    cin>>kl3.nazwa;
    cout<<"Podaj iloœc osob w 3 klasie"<<endl;
    cin>>kl3.ilosc;
    suma=kl1.ilosc+kl2.ilosc+kl3.ilosc;
    busy=ceil((float)suma/(float)bus);
    cout<<"busy = "<<busy<<endl;
    cout<<"zostanie "<<busy*bus-suma<<" miejsc"<<endl;


    return 0;
}

