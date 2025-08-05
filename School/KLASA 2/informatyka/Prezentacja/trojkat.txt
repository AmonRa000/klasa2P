#include <iostream>
using namespace std;

bool CzyTrojkat(int a,int b,int c){ // Sprawdzanie nierówności trójkąta
    if(a + b > c and a + c > b and b + c > a){
        return true;
    }else{
        return false;
    }
}

void RodzajTrojkata(int a, int b, int c){
    if(a == b == c){
        cout<<"To jest trójkąt równoboczny"<<endl;
    }
    else if(a == b or b == c or a == c){
        cout<<"To jest trójkąt równoramienny"<<endl;
    }
    else{
        cout<<"To jest trójkąt różnoboczny"<<endl;
    }
}

void CzyProstokatny(int a, int b, int c) { // Sprawdzanie trójkąta prostokątnego
    if ((a * a + b * b == c * c) or (b * b + c * c == a * a) or (c * c + a * a == b * b)) {
        cout << "To jest trójkąt prostokątny (pitagorejski)"<<endl;
    }
}

int main(){
    int a, b, c;
    cout << "Podaj bok a: ";
    cin >> a;
    cout << "Podaj bok b: ";
    cin >> b;
    cout << "Podaj bok c: ";
    cin >> c;
    
    if(CzyTrojkat(a,b,c)){
        RodzajTrojkata(a,b,c);
        CzyProstokatny(a,b,c);
    }else{
        cout<<"To nie jest trojkat"<<endl;
    }
    return 0;
}
