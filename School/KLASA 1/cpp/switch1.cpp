#include<iostream>
using namespace std;

int main() {
    int day;
    cout << "podaj numer dnia tygodnia: ";
    cin >> day;
    switch(day) {
    case 1:
        cout<<"Jest poniedzia�ek, nie zapomnij by� super!\n";
        break;
    case 2:
        cout<<"dopiero wtorek\n";
        break;
    case 3:
        cout<<"�rodek tygodnia\n";
        break;
    case 4:
        cout<<"to te� jest �rodek tygodnia\n";
        break;
    case 5:
        cout<<"nareszcie pi�tek, weekendu pocz�tek\n";
        break;
    case 6:
        cout<<"wreszcie weekend\n";
        break;
    case 7:
        cout<<"jeszcze wolne\n";
        break;
        default:
        cout<< "NIe ma takiego dnia\n";



    }

    return 0;
}

