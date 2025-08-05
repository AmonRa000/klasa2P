<?php
class PoliczWyrazy{
    public static string $tekst="Metoda policzWyrazy() zwraca liczbe wyrazów w danym tekście";
    public static function policzWyrazy(string $a):int{
        return Count(explode(" ",$a));
    } 
}
?>