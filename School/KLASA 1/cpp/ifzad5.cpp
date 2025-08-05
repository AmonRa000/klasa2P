#include<iostream>
using namespace std;

int main(){
    int a, b,c;
    cin >>a>>b>>c;
    int maks;
    maks = max(a,b);
    cout <<"max = "<<maks<<endl;
    cout <<"max = "<<max(a,b)<<endl;

    maks = max(max (a,b),c);
    cout<<"max = "<<maks<<endl;

    maks = max(max (a,b),c);
    cout<<"max = "<<maks<<endl;
    int mini = min(a,b);


   return 0;
}

