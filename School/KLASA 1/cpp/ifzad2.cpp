#include<iostream>
using namespace std;

int main(){
    int a = 5, b = 12,tmp;
    cout << a << " " << b <<endl;
    tmp = a;
    a = b;
    b = tmp;


    cout << a << " " << b <<endl;
   return 0;
}

