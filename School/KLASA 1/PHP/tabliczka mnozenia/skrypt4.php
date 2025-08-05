<?php
//skrypt.php
$numer1=$_POST['numer1'];
$numer2=$_POST['numer2'];
?>
<style>
    table, th, td {
    border: 1px solid rgb(0, 0, 0);
    border-collapse: collapse;
    }
    th, td {
        padding: 6px;
        text-align:left
    }
    </style>
<?php
echo '<table border="1">';
for($i=1;$i<=$numer2;$i++){
    echo "<tr><td>".$numer1."</td><td>*</td><td>".$i."</td><td>=</td><td>".$numer1*$i."</td></tr>";
}

?>
<br>
<a href="tabliczka.html" title="Powrót do strony głównej">Powrót do strony głównej</a>