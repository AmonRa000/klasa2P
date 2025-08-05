#include<iostream>
using namespace std;

int main() {
    int n;
    cout << "podaj liczbe podzielna przez 2 i niepodzielna przez 3: ";
    cin >> n;
    if(n%2==0 and n%3!=0) {
        cout << "dobrze\n";
    } else {
        cout << "zle\n";
    }

    return 0;
}

