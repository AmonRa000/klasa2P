<?php
include_once 'przeciwprostokatna.php';

class STOZEK extends przeciwprostokatna{
    private ?float $promien = null;
    private ?float $wysokosc = null;

    public function __construct($r, $h){
        $this->promien = $r;
        $this->wysokosc = $h;
    }
    private function pole_podstawy(): float{
        return pi() * pow($this->promien, 2);
    }
    private function pole_boczne(): float{
        return pi() * $this->promien * $this->PPK($this->wysokosc, $this->promien);
    }
    public function pole_calkowite(): float{
        return $this->pole_podstawy() + $this->pole_boczne();
    }
    public function objetosc(): float{
        return (pi() * pow($this->promien, 2) * $this->wysokosc) / 3;
    }
}
?>