<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dni tygodnia</title>
</head>
<style>
    table{
        border-collapse: collapse;
    }
    td{
        border: solid 2px; 
        padding: 20px;
        text-align: center;
    }
    td:nth-child(even){
        background-color: cyan; 
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
                <?= $element; ?>
                </td>
            <?php }?>
        </tr>
    </table>
</body>
</html>