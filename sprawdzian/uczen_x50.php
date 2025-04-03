<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
table{
    border: solid 1px lightgray;
}
td{
    padding: 7px;
}
</style>
<body>
<table>
    <?php
        for($n=1;$n<=50;$n++){
    ?>
        
            <tr>
            <td><label for="<?=$n?>">Uczeń <?=$n?>:</label></td>
            <td><input type="text" id="<?=$n?>"></td>
        </tr>
    <?php
        }
    ?>
        <td colspan="2"><input type="submit" value="Zapisz"></td>
        </table>

</body>
</html>