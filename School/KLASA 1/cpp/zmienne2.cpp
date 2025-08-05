#include<iostream>
using namespace std;

int main() {
    int a,b;
    cout << "Podaj bok a: ";
    cin >> a;
    cout << "Podaj blok b: ";
    cin >> b;
    int pole = a * b, obw = a*2 + b*2;
    cout << "Pole = " << pole << endl;
    cout << "Obwod = " << obw << endl;
    return 0;
}

