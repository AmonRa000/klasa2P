#include<iostream>
#include<ctime>
using namespace std;

int main() {
    srand(time(NULL));
    int n;
    n = rand()%15;
    cout<<n<<endl;

    n = 1+rand()%23;
    cout<<n<<endl;
//<12,64>
    n = 12+rand()%53;
    cout<<n<<endl;
//<a, b>
    n = a+rand()%(b-a+1);
    cout<<n<<endl;


    return 0;
}

