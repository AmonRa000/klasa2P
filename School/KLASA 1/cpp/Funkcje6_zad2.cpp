#include<iostream>
using namespace std;

bool isTriangle(int a, int b, int c) {
    if(a+b>c && b+c>a && a+c>b) {
        return true;
    }else{
        return false;
    }
}

int main() {
    int a=5, b=7, c=8;
    if(isTriangle(a,a,c)==true) {
        cout<<"to jest trojkat\n";
    }else{
        cout<<"to nie jest trojkot\n";
    }

    return 0;
}

