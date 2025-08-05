<?php
class Trojkat {
    public $podstawa;
    public $wysokosc;
    public function ustawPodstawe($obiekt, $podstawa) {
        $obiekt->podstawa = $podstawa;
    }

    public function ustawWysokosc($obiekt, $wysokosc) {
        $obiekt->wysokosc = $wysokosc;
    }

    public function obliczPole($obiekt) {
        return 0.5 * $obiekt->podstawa * $obiekt->wysokosc;
    }

    public function wyswietlInformacje($obiekt) {
        $pole = $this->obliczPole($obiekt);
        echo "Trojkat o podstawie " . $obiekt->podstawa . " i wysokosci " . $obiekt->wysokosc . ", pole: " . $pole;
    }
}

$trojkat1 = new Trojkat();
$trojkat1->ustawPodstawe($trojkat1, 5);
$trojkat1->ustawWysokosc($trojkat1, 10);
$trojkat1->wyswietlInformacje($trojkat1);
?>
