#include<iostream>
using namespace std;

int main() {
    int a, b;
    cout << "podaj 1 liczbe: ";
    cin >> a;
    cout << "podaj 2 liczbe: ";
    cin >> b;
    char znak;
    cout << "Podaj wymbol dzia³ania (+, -, *, /): ";
    cin >> znak;



    switch(znak) {
        case '+':
        cout<<a<<" + "<<b<<" = "<<a+b<<endl;
        break;
    case '-':
        cout<<a<<" - "<<b<<" = "<<a-b<<endl;
        break;
    case '*':
        cout<<a<<" * "<<b<<" = "<<a*b<<endl;
        break;
    case '/':
        cout<<a<<" / "<<b<<" = "<<a/b<<endl;
        break;
    case '/':
        if(b==0) {
            cout<<"nie dzielimy przez 0\n"
            cout<<a<<" / "<<b<<"="<<(float)a/(float)b<<endl;
        }

        break
     default:
       cout<< "Nie ma takiego dzia³ania\n";



    }

    return 0;
}

