#include<iostream>
using namespace std;

int main() {
   for(int i=1; i<=10; i++) {
       for(int j=1;j<=15 ;j++){
            cout<<j<<" ";


       }
       cout<<endl;
   }
   cout<<endl<<endl;
   int w, k;
   w = 7;
   k = 23;
   cout<<"Podaj ilosc wierszy i kolumn";
   cin >> w >>k;
   char znak;
   cin>>znak;
      for(int i=1; i<=w; i++) {

       for(int j=1;j<=k ;j++){
            cout<<znak<<" ";


       }
       cout<<endl;
      }



    return 0;
}

