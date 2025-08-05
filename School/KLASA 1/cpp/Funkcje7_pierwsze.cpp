#include<iostream>
#include<cmath>
using namespace std;

bool isPrime(int n) {
    for(int i=2; i<sqrt(n);i++){
        if(n%i==0){
            return false;
        }
    }
    return true;
}
int main() {
    int n=1000003;
    if(isPrime(n)){
        cout<<n<<" - liczba pierwsza\n";
    }else{
        cout<<n<<" - liczba zlozona\n";
    }
for (int i=5;i<=25;i++){
    if(isPrime(i)){
        cout<<i<<" - liczba pierwsza\n";
    }else{
        cout<<i<<" - liczba zlozona\n";
    }

}
    return 0;
}

