<?php
class przeciwprostokatna{
    protected function PPK($a, $b): float{
        $c = pow($a, 2) + pow($b, 2);
        return sqrt($c);
    }
}
?>