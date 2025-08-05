#include<iostream>
using namespace std;

int main() {
    int n;
    cout << "Podaj liczbe podzielna prez 2 i 3: ";
    cin >> n;
    if(n%3 == 0 and n%2 == 0) {
        cout << "Dobrze";
    } else {
        cout << "Zle";
    }
    return 0;
}

