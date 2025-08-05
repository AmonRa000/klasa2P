#include<iostream>
using namespace std;

int main() {
    //Mia³eœ 104.6 metra siatki(siatka=104.6).
    //Ogrodzi³eœ dzia³kê o kszta³cie prostok¹ta o bokach a = 16.7, b=24.9.
    //Ponadto trochê siatki zmarnowa³eœ (zniszczy³eœ) strata=22.4. W ogrodzeniu jest brama=3.5.
    //Ile metrów siatki Ci zosta³o lub zabrak³o lub starczy³o w sam raz?
    //Dane pobierz od u¿ytkownika za pomoc¹ cin (oprócz d³ugoœci siatki i bramy).
    int a,b;
    int siatka;
    int strata;
    int brama;
    siatka = 104.6;
    brama = 3.5;
    cout<<"Podaj szerokosc dzialki ";
    cin>>a;
    cout<<"Podaj dlugosc dzialki ";
    cin>>b;
    cout<<"ile metrow siatki zniszczyles? ";
    cin>>strata;
    if(a+a+b+b-brama-strata<=104.6){
        cout<<"masz wystarczajaco siatki";
    }else{
        cout<<"zabraknie ci sitaki";

    }










    return 0;
}

