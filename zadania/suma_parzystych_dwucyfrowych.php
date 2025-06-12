<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$suma = 0;
?>
<p> <?php for($i=10;$i<=99;$i+=2){
echo $i."|";
$suma+=$i;
}
?>
</p>
</p>Suma powyższych liczb jest rowna <?=$suma ?></p>
</body>
</html>