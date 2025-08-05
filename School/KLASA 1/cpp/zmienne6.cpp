#include<iostream>
using namespace std;

int main() {
    float weight, price, cash, wallet = 200.0;
    cout << "Ile kupujesz jablek (kg)? : ";
    cin >> weight;
    cout << "Jaka jest cena jablek? : ";
    cin >> price;
    cash = price * weight;
    wallet = wallet - cash;
    cout << "Do zaplaty: " << cash << endl;
    cout << "W portfelu masz: " << wallet << endl;
    return 0;
}

