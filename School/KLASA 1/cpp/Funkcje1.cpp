#include<iostream>
using namespace std;

void pisz() {
    cout<<"Hello C++\n";
}

void pisz2(string napis) {
    cout<<"Hello "<<napis<<" \n";
}


int main() {
    pisz();
    pisz2("Mirek");
    string txt;
    txt = "Kielce";
    pisz2(txt);
    pisz2(txt+" i Warszawa");


    return 0;
}

