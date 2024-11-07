<?php
class Arytmetyka{
    public float $liczbaA; 
    public float $liczbaB; 

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
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arytmetyka</title>
</head>
<body>
<?php
$obiekt = new Arytmetyka();
$obiekt->liczbaA = 3;
$obiekt->liczbaB = 0;
?>
<ol style="list-style-type:circle">
<li>Suma liczb <strong><?=$obiekt->liczbaA?></strong> i <strong><?=$obiekt->liczbaB?></strong> jest równa <strong><?=$obiekt->suma()?></strong></li>
<li>Różnica liczb <strong><?=$obiekt->liczbaA?></strong> i <strong><?=$obiekt->liczbaB?></strong> jest równa <strong><?=$obiekt->roznica()?></strong></li>
<li>Iloczyn liczb <strong><?=$obiekt->liczbaA?></strong> i <strong><?=$obiekt->liczbaB?></strong> jest równy <strong><?=$obiekt->iloczyn()?></strong></li>
<li>Iloraz liczb <strong><?=$obiekt->liczbaA?></strong> i <strong><?=$obiekt->liczbaB?></strong> wynosi <strong><?=$obiekt->iloraz()?></strong></li>
<li>Reszta z dzelenia liczb <strong><?=$obiekt->liczbaA?></strong> przez <strong><?=$obiekt->liczbaB?></strong> jest równa <strong><?=$obiekt->reszta()?></strong></li>
<li>Liczba <strong><?=$obiekt->liczbaA?></strong> do potęgi <strong><?=$obiekt->liczbaB?></strong> jest równa <strong><?=$obiekt->potega()?></strong></li>
</ol>


</body>
</html>