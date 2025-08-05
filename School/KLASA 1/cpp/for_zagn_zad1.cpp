#include<iostream>
using namespace std;

int main() {
   int a;
   cout<<"Podaj bok kwadratu (l. parzysta):";
   cin >> a;
      for(int i=1; i<=a; i++) {
       for(int j=1;j<=a ;j++){
            if(j<=a/2) {
                cout<<"* ";
            } else {
                cout<<". ";
            }
       }
       cout<<endl;
      }



    return 0;
}

