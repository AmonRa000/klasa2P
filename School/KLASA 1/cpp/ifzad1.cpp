#include<iostream>
#include<cmath>
using namespace std;

int main() {
    for(int i=100;i<1000;i++){
    int jedn,dzies,setki;
    jedn  = i%10;
    setki = i/100;
    dzies = (i/10)%10;
    if(pow(jedn,3)+ pow(dzies,3)+ pow(setki,3) ==i){
        cout<<i<<endl;
     }
   }
   return 0;
}

