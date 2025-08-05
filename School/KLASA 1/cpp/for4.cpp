#include<iostream>
using namespace std;

int main() {

   for(int i=1; i<=20; i++) {
        //cout<<i<<" ";
      if(i==14) break;
      cout<<i<<" ";

   }
   cout<<endl;
    for(int i=1; i<=20; i++) {
        //cout<<i<<" ";
      if(i==14) continue;
      cout<<i<<" ";

   }
   cout<<endl;
    return 0;
}

