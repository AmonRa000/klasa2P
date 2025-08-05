#include<iostream>
using namespace std;

int main() {
    int n;
    cout<<"Wczytaj n:";
    cin>>n;
    int i=0;
    int W=1;
    if(n<1){
    cout<<"Nie mo¿na liczyæ silni z liczb ujemnych"<<endl;
    }else{
        if(n>i){
        i++;
        W=W*i;
        }else{
        cout<<"Silnia z "<<n" wynosi "<<W<<endl;
        }
    }

   return 0;
}

