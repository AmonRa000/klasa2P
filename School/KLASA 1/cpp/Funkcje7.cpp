#include<iostream>
using namespace std;

string wspak(string txt) {
    int dl = txt.length();
    string txt_new="";
    for (int i=dl-1; i>=0; i--){
        txt_new += txt[i];
    }
    return txt_new;
}
int main() {
    string napis="kajak";
  cout<<wspak(napis)<<endl;
  if(napis==wspak(napis)){
    cout<<napis<<" to palindrom\n";
  }else{
    cout<<napis<<" to nie jest palindrom\n";
    }


    return 0;
}

