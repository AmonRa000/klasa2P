#include<iostream>
using namespace std;

int main() {
    //Wczytaj dwie liczby parzyste:
    //szer - szerokoœæ prostok¹ta
    //wys - wysokoœæ prostok¹ta
    //Wyœwietl taki prostok¹t np. dla szer=10 wys=6
    int a,b;
    int i;
    int j;
    cout<<"Podaj srzerkosc";
    cin>>a;
    cout<<"Podaj wyskokosc";
    cin>>b;
    for(i=1;i<=a;i++)
    for(j=1;j<=b;j++)
    if(i>a/2 and j>b/2){
        cout<<"*";
        cout<<endl;
    }else{
        cout<<"+";
    }





    return 0;
}

