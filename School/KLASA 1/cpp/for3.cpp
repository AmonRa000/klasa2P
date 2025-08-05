#include<iostream>
using namespace std;

int main() {

   for(int i=1; i<=20; i++) {

      cout<<i<<" ";

   }
   cout<<endl;
   for(int i=18; i>=2; i--) {

      cout<<i<<" ";

   }
   cout<<endl;
   for(int i=1; i<=30; i++) {
        if(i%3==0) {
            cout<<i<<" ";
        }

   }
   cout<<endl;
    for(int i=1; i<=30; i++) {
        if(i%3==0 and i%2!=0) {
            cout<<i<<" ";
        }

   }
   cout<<endl;
    return 0;
}

