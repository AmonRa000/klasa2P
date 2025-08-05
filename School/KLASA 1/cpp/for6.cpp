#include<iostream>
using namespace std;

int main() {
    int suma = 0, i_suma;
   for(int i=1; i<=100; i++) {
        suma = suma+i;
      if(suma > 2000){
        i_suma = i;
        break;
      }
      //cout<<i<<" ";
   }
      cout << "suma = " << suma <<endl;
      cout << "i = " << i_suma <<endl;
      cout<<endl;


    return 0;
}

