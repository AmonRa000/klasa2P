#include<iostream>
using namespace std;

bool isSquere(int a, int b) {
    /*if(a==b) {
        return true;
    }else{
        return false;
    }
    */
    return a==b;

}

int main() {
    int c=5, d=7;
    if(isSquere(c, d)==true) {
        cout<<"to jest kwadrat\n";
    }else{
        cout<<"to nie jest kwadrat\n";
    }


    if(isSquere(c, c)==true) {
        cout<<"to jest kwadrat\n";
    }else{
        cout<<"to nie jest kwadrat\n";
    }


    return 0;
}

