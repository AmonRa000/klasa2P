<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    tr
    td{
        background-color: lightblue;
    }
</style>
<body>
    <table>
        <tr>
    <?php
    $dni = ['pon ','wto ','śro ','czw ','pią ','sob ','nie '];
    foreach ($dni as $element) {
        ?>
        <td>
        <?= $element;
    }
        ?>
        </td> 
    
        </tr>
    </table>
</body>
</html>