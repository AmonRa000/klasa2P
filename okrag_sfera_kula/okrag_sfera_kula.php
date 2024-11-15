<?php
class okragStrefaKula{
    private int $r;

    function __construct(int $promien){
        $this->r = $promien;
    }
    public function obwod(int $promien){
        $obwod=2*pi()*$promien;
        return number_format($obwod,2,","," ");
    }
    public function pole(int $promien){
        $pole = 4*pi()*$promien**2;
        return number_format($pole,2,","," ");
    }
    public function objentosc(int $promien){
        $objentosc=1/3*4*pi()*$promien**3;
        return number_format($objentosc,2,","," ");
    }
}
?>