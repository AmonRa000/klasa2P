#include<iostream>
#include<ctime>
using namespace std;

int main() {
    int osoba[4];
    osoba[0] = 174;
    osoba[1] = 175;
    osoba[2] = 165;
    osoba[3] = 180;
    cout<<"wzrost = "<<osoba[2]<<endl;
    osoba[0]++;
    osoba[1]+=2;
    osoba[2]=osoba[2]+3;
    osoba[3]=osoba[2]+15;
    for (int i=0;i<4;i++){
        cout<<"wzr. os. nr "<<i<<"wynosi: "<<osoba[i]<<endl;
    }

    return 0;
}

