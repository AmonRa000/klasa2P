#include<iostream>
using namespace std;

float average(float a, float b) {
    float sr;
    sr = (a+b)/2.0;
    return sr;

}

int main() {
    float c=3.4, d=1.1;
    cout<<average(c, d)<<endl;
    float wynik = average(4.3, 6.5);
    cout<<"srednia = "<<wynik<<endl;


    return 0;
}

