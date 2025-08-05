#include<iostream>
using namespace std;
struct rect {
float a;
float b;
float pole;
};

int main() {
    rect tab[3];
    tab[0]=[2.6,2.0,0];
    tab[1]=[1.12,5.5,0];
    tab[2]=[2.5,1.5,0];
    for(int i=0;i<=2;i++) {
        tab[i].pole=tab[i].a*tab[i].b;
    }
    cout<<"Suma pol = "<<tab[0].pole+tab[1].pole+tab[2].pole<<end;

   return 0;
}

