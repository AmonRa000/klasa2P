#include<iostream>
using namespace std;

void rectangle(int a, int b) {
    int p = a*b,obw=2*a+2*b;
    cout<<"pole = "<<p<<endl;
    cout<<"obwod = "<<obw<<endl;
}

int main() {
    int c=34, d=11;
    rectangle(c, d);


    return 0;
}

