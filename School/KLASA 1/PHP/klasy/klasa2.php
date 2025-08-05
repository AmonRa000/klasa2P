<?php
 // tworzenie i wyświetlanie metod
class Samochod {
  public $marka;
  public $model;

  public function pobierzModel() {
    return $this->model;
  }
}

$opelAstra = new Samochod();
$opelAstra->model = 'Astra';

$opelInsignia = new Samochod();
$opelInsignia->model = 'Insignia';

echo $opelAstra->pobierzModel();
echo $opelInsignia->pobierzModel();

?>