#include<iostream>
using namespace std;

int main(){
    int a, b, c;
    cin >>a>>b>>c;
    if(a>=b and a>=c) {
        cout<<"maks = "<<a<<endl;
    } else if(b>=a>=c) {
        cout<<"maks = "<<b<<endl;
    } else {
        cout<<"maks = "<<c<<endl;
    }
   return 0;
}

