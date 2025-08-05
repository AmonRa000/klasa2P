<?php
class Samochod{
    public $marka;
    public $model;

    public function ustawMarke($obiekt, $marka) {
        $obiekt->marka = $marka;
    }
    public function ustawModel($obiekt, $model) {
        $obiekt->model = $model;
    }
    public function ustawSpalanie($obiekt, $spalanie) {
        $obiekt->spalanie = $spalanie;
    }
    public function obliczKosztPaliwa($obiekt, $dystans,$cenaPaliwa){
        $obiekt->$ilosc * $obiekt->cena;
    }
}

?>