<?php
class Dzialanie{
    public $liczbaA; 
    public $liczbaB; 

    public function mnozenie(){
        if(is_numeric($this->liczbaA) && is_numeric($this->liczbaB)){
            return $this->liczbaA*$this->liczbaB;
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
$obiekt = new Dzialanie();
$obiekt->liczbaA = 9;
$obiekt->liczbaB = 9;
?>
<p>Iloczyn liczb <?=$obiekt->liczbaA?> i <?=$obiekt->liczbaB?> jest równy <?=$obiekt->mnozenie()?></p>
</body>
</html>