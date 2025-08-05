#include<iostream>
using namespace std;

void sum(int a, int b) {
    int s;
    s = a+b;
    cout<<a<<" + "<<b<<" = "<<s<<endl;
}




int main() {
    sum(23,78);
    int c=34, d=11;
    sum(c, d);
    int a=6, b=8;
    sum(a,b);


    return 0;
}

