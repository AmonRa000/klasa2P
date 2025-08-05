#include<iostream>
using namespace std;

int main() {
    int a,b,c;
    cout << "Podaj bok a: ";
    cin >> a;
    cout << "Podaj blok b: ";
    cin >> b;
    cout << "Podaj blok c: ";
    cin >> c;
    int obw = a+b+c;
    cout << "Obwod = " << obw << endl;
    return 0;
}

