#include<iostream>
#include<cmath>
using namespace std;

int main() {
    float zm = 7.56;
    float wynik = round(zm);
    cout << "zaokraglenie = " << wynik << endl;

    wynik = floor(zm);
    cout << "floor = " << wynik << endl;

    wynik = ceil(zm);
    cout << "ceil = " << wynik << endl;


    return 0;
}

