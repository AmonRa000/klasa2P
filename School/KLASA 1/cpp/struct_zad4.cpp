#include<iostream>
#include<ctime>
using namespace std;

int main() {
    srand(time(NULL));
    int liczba[15], ile=0;
    for(int i=0;i<15;i++) {
        liczba[i]=12+rand()%23;
    }
    for(int i=0;i<15;i++) {
        cout<<liczba[i]<<" ";
        if(liczba[i]==20) {
            ile++;
        }
    }
    cout<<endl;
    cout<<"liczba 20 wyst¹pi³a "<<ile<<" razy\n";
    maks=liczba[0];
    for(int i=0;i<15;i++) {
        if(liczba[i]>maks) maks=liczba[i];

    }
    cout<<"Liczba maks. = "<<maks<<endl;
    for(i=1;i<=maks;i++){
        if(maks%i==0) cout<<i<<" ";
    }
   return 0;
}

