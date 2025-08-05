<?php
class koszyk{
    public $nazwa;
    public $ilosc;
    public $cena;

public function ustawProdukt($produkt, $nazwa) {
    $produkt->nazwa = $nazwa;
}
public function ustawIlosc($produkt, $ilosc) {
    $produkt->ilosc = $ilosc;
}
public function ustawCene($produkt, $cena) {
    $produkt->cena = $cena;
}
public function obliczanieCeny($produkt){
    $produkt->$ilosc * $produkt->cena;
}
public function wyswietlKoszyk($produkt){
    echo "Nazwa: ".$produkt->nazwa." Ilosc: ".$produkt->ilosc." Cena: ".$produkt->cena;

}
}
$produkt1 = new koszyk();
$produkt1->ustawProdukt($produkt1, "mleko");
$produkt1->ustawIlosc($produkt1, 1);
$produkt1->ustawCene($produkt1, 2);
$produkt1->wyswietlKoszyk($produkt1);



?>