#include<iostream>
using namespace std;
struct samchod{
    string marka
    int rok;
    double poj;
};

int main() {
samochod fiat, skoda, audi;
    fiat.marka="fiat"
    fiat.rok=2010;
    fiat.poj=1.4;
    cout<<fiat.marka<<" "<<fiat.rok<<" "<<fiat.poj<<endl;
    cout<<skoda.marka<<" "<<skoda.rok<<" "<<skoda.poj<<endl;
    cout<<audi.marka<<" "<<audi.rok<<" "<<audi.poj<<endl;
    tmp=fiat;
    if(skoda.poj<tmp.poj) tmp=skoda;
    if(audi.poj<tmp.poj) tmp=audi;
    cout<<tmp.marka<<" "<<tmp.rok<<" "<<tmp.poj<<endl;
    if(fiat.marka[0]=='A' or fiat.marka[0]=='B'){
        cout<<fiat.marka<<" "<<fiat.rok<<" "<<fiat.poj<<endl;
    }
    if(skoda.marka[0]=='A' or skoda.marka[0]=='B'){
        cout<<skoda.marka<<" "<<skoda.rok<<" "<<skoda.poj<<endl;
    }
    if(audi.marka[0]=='A' or audi.marka[0]=='B'){
        cout<<audi.marka<<" "<<audi.rok<<" "<<audi.poj<<endl;
    }
   return 0;
}

