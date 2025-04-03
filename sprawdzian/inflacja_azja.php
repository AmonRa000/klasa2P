<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    fieldset,legend,th,td{
        border: dashed 2px green;
        padding: 8px;
    }
</style>
<body>
<?php
    $json = '{"Armenia":"2,5%","Liban":"16,1%","Mongolia":"9,6%"}';
    $dane = json_encode($json, true);
    $dane2 = json_decode($json, true); 

?>
    <fieldset>
        <legend>Tekst w formacie JSON</legend>
        <code>
            <pre><?=print_r($dane, true)?></pre>
        </code>
    </fieldset>
    
    <fieldset>
        <legend>Tablica PHP</legend>
        <code>
            <pre><?=print_r($dane2, true)?></pre>
        </code>
    </fieldset>

    <fieldset>
        <legend>Tabela HTML</legend>
        <table>
            <th>Kraj</th>
            <td><?=print_r($dane2)?></td>
            <th>Inflacja</th>
        </table>
    </fieldset>
</body>
</html>