#include<iostream>
using namespace std;

int main() {
    //Mia�e� 104.6 metra siatki(siatka=104.6).
    //Ogrodzi�e� dzia�k� o kszta�cie prostok�ta o bokach a = 16.7, b=24.9.
    //Ponadto troch� siatki zmarnowa�e� (zniszczy�e�) strata=22.4. W ogrodzeniu jest brama=3.5.
    //Ile metr�w siatki Ci zosta�o lub zabrak�o lub starczy�o w sam raz?
    //Dane pobierz od u�ytkownika za pomoc� cin (opr�cz d�ugo�ci siatki i bramy).
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

