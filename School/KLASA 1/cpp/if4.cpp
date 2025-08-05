#include<iostream>
using namespace std;

int main() {
    int n;
    cout << "Podaj liczbe podzielna prez 3: ";
    cin >> n;
    if(n%3 == 0) {
        cout << "Liczba jest podzielna przez 3";
    } else {
        cout << "Liczba nie jest podzielna przez 3";
    }
    return 0;
}

