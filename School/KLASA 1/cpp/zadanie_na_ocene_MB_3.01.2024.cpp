#include<iostream>
#include<ctime>
using namespace std;


//program ma wyœwietliæ 6 liczb losowych, z tych liczb ma wypisaæ maks i minimum, nastêpnie ma je dodaæ do siebie i podzieliæ przez iloœc liczb(6)
int main(){
    int liczby[6];
    int suma = 0;
    int maks = 0;
    int min = 15;
    srand(time(NULL));

    for (int i = 0; i<6; i++){
        liczby[i] = 3+rand() % 13;
        cout<<liczby[i]<<" ";
        if (liczby[i]>maks){
            maks = liczby[i];
        }
        if (liczby[i]<min){
            min = liczby[i];
        }
        suma += liczby[i];
    }
    cout<<"maksimum: "<<maks<<endl;
    cout<<"minium: "<<min<<endl;
    cout<<"suma: "<<suma<<endl;
    cout<<"srednia arytmetyczna: "<<suma / 6.0<<endl;

    return 0;
}


