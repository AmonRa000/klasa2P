<?php
class Arytmetyka{
    public float $liczbaA; 
    public float $liczbaB; 

    public function __construct(float $a,float $b){
        $this->liczbaA = $a; 
        $this->liczbaB = $b; 
    }

    public function suma(){
        if(is_numeric($this->liczbaA) && is_numeric($this->liczbaB)){
            return $this->liczbaA+$this->liczbaB;
        }
        return;
    }
    public function roznica(){
        if(is_numeric($this->liczbaA) && is_numeric($this->liczbaB)){
            return $this->liczbaA-$this->liczbaB;
        }
        return;
    }
    public function iloczyn(){
        if(is_numeric($this->liczbaA) && is_numeric($this->liczbaB)){
            return $this->liczbaA*$this->liczbaB;
        }
        return;
    }
    public function iloraz(){
        if(is_numeric($this->liczbaA) && is_numeric($this->liczbaB)){
            if($this->liczbaB!=0){
                return $this->liczbaA/$this->liczbaB;
            }else{
                return null;
            }
        }
        return;
    }
    public function reszta(){
        if(is_numeric($this->liczbaA) && is_numeric($this->liczbaB)){
            if($this->liczbaB!=0){
                return $this->liczbaA%$this->liczbaB;
            }else{
                return null;
            }
        }
        return;
    }
    public function potega(){
        if(is_numeric($this->liczbaA) && is_numeric($this->liczbaB)){
           return $this->liczbaA**$this->liczbaB;
        }
        return;
    }
};
?>