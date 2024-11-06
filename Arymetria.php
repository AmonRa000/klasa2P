<?php
class Arytmetyka{
    public float $liczbaA; 
    public float $liczbaB; 

    public function suma(){
        if(is_numeric($this->liczbaA) && is_numeric($this->liczbaB)){
            return $this->liczbaA+$this->liczbaB;
        }
        return null;
    }
    public function roznica(){
        if(is_numeric($this->liczbaA) && is_numeric($this->liczbaB)){
            return $this->liczbaA-$this->liczbaB;
        }
        return null;
    }
    public function iloczyn(){
        if(is_numeric($this->liczbaA) && is_numeric($this->liczbaB)){
            return $this->liczbaA*$this->liczbaB;
        }
        return null;
    }
    public function iloraz(){
        if(is_numeric($this->liczbaA) && is_numeric($this->liczbaB)){
            if($this->liczbaB!=0){
                return $this->liczbaA/$this->liczbaB;
            }else{
                echo "Błąd";
            }
        }
        return null;
    }
    public function reszta(){
        if(is_numeric($this->liczbaA) && is_numeric($this->liczbaB)){
            if($this->liczbaB!=0){
                return $this->liczbaA%$this->liczbaB;
            }else{
                echo "Błąd";
            }
        }
        return null;
    }
    public function potega(){
        if(is_numeric($this->liczbaA) && is_numeric($this->liczbaB)){
           return $this->liczbaA**$this->liczbaB;
        }
        return null;
    }
};
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$obiekt = new Arytmetyka();
$obiekt->liczbaA = 9;
$obiekt->liczbaB = 0;
?>
<ol style="list-style-type:circle">
<li>Suma liczb <b><?=$obiekt->liczbaA?></b> i <b><?=$obiekt->liczbaB?></b> jest równa <b><?=$obiekt->suma()?></b></li>
<li>Różnica liczb <b><?=$obiekt->liczbaA?></b> i <b><?=$obiekt->liczbaB?></b> jest równa <b><?=$obiekt->roznica()?></b></li>
<li>Iloczyn liczb <b><?=$obiekt->liczbaA?></b> i <b><?=$obiekt->liczbaB?></b> jest równy <b><?=$obiekt->iloczyn()?></b></li>
<li>Iloraz liczb <b><?=$obiekt->liczbaA?></b> i <b><?=$obiekt->liczbaB?></b> wynosi <b><?=$obiekt->iloraz()?></b></li>
<li>Reszta z dzelenia liczb <b><?=$obiekt->liczbaA?></b> przez <b><?=$obiekt->liczbaB?></b> jest równa <b><?=$obiekt->reszta()?></b></li>
<li>Liczba <b><?=$obiekt->liczbaA?></b> do potęgi <b><?=$obiekt->liczbaB?></b> jest równa <b><?=$obiekt->potega()?></b></li>
</ol>


</body>
</html>