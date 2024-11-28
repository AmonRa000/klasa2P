<?php
class MasaGestosc{
    private ?float $promien;
    private ?string $substancja;
    private ?float $gestosc;

    public function __construct(string $substancja,float $promien){
        $this->substancja = $substancja;
        $this->promien =  $promien;
    }
    
    private function obliczObjetosc(): float{
        return (4 / 3) * pi() * pow($this->promien, 3);
    }

    public function obliczMase(): float{
        switch ($this->substancja){
            case 'gips':
                $this->gestosc = 2350;
                break;
            case 'rtęć':
                $this->gestosc = 13534;
                break;
            case 'złoto':
                $this->gestosc = 19228;
                break;
            case 'woda':
                $this->gestosc = 997;
                break;
            default:
                $this->gestosc = 0;
        }
        $objetosc = $this->obliczObjetosc();
        return number_format($this->gestosc * $objetosc,3,","," ");
    }
}
