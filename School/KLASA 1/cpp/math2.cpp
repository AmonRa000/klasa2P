#include<iostream>
#include<cmath>
using namespace std;

int main() {
    cout<<abs(5)<<endl;
    cout<<abs(-5)<<endl;

    float zm = 5.78;
    float w = sqrt(zm);
    cout<<"pierwisatek = "<<w<<endl;
    float podstawa = 2.7, wykladnik = 1.9;
    float potega = pow(podstawa,wykladnik);
    cout<<"potega = "<<potega<<endl;
    w = fmod(podstawa,wykladnik);
    cout<<"reszta = "<<w<<endl;

    return 0;
}

