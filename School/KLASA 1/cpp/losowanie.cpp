#include<iostream>
#include<ctime>
#include<algorithm>

using namespace std;

int main() {
    srand(time(NULL));
    int kupon[5],maszyna[5], ile = 0;
    bool is_powt;

    do{
        for (int i=0;i<5;i++ ) kupon[i] = 1+rand()%42;
        sort(kupon,kupon+5);
        is_powt = false;
        for (int i=0;i<3;i++ )

            if(kupon[i]==kupon[i+1]) is_powt=true;
    }while(is_powt);
    cout<<"Kupon: \n";


    for (int i=0 ;i<5 ;i++){
        cout<<maszyna[i]<<" ";
    }
    cout<<endl;
    for (int i=0; i<5; i++) {
    for (int j=0; j<5; j++) {
        if(kupon[i]==maszyna[j]) ile++;
        }
    }
    cout<<"Traf. = "<<ile<<endl;


    return 0;
}

