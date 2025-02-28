<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--<link href="https://fonts.googleapis.com/css2?family=Pixelify+Sans:wght@400..700&display=swap" rel="stylesheet">-->
    <link href="https://fonts.googleapis.com/css2?family=Grechen+Fuemen&display=swap" rel="stylesheet">
    <style>
        html{
            /*font-family: "Pixelify Sans", serif;*/
            font-family: "Grechen Fuemen", serif;
        }
        body{
            padding: 100px;
            background-color: #fff7d1;
        }
        table{
            border-collapse: collapse;
            background-color: #ffecc8;
        }
        td{
            border: solid gray;
            padding: 10px;
        }
        input{
            background-color: #ffd09b;
            border-color: #ffb0b0;
        }
        input[type="checkbox"]{
            accent-color: #ffd09b;
            outline: #ffb0b0;
            outline-offset: 2px;
            transform: scale(2);
        }
    </style>
</head>
<body>
<table>
    <caption>Terminy</caption>
    <form method="post">
        <?php
        $ZapiszDoPliku=false;
        for($i=1; $i<6; $i++){
            $termin="Termin ".$i;
            $rok_miesiac="rok_miesiac_".$i;
            $checked = (in_array($termin, $_POST['Termin'] ?? []) && isset($_POST[$rok_miesiac]) ? 'checked' : '');
            $warunek = (in_array($termin, $_POST['Termin'] ?? []) && !empty($_POST[$rok_miesiac]));
            $ZapiszDoPliku = $ZapiszDoPliku || $warunek ? true : false;
         ?>
         <tr>
            <td><label for="<?=$termin?>"><?=$termin?></td>
            <td><input type="checkbox" name="Termin[]" value="<?=$termin?>" id="<?=$termin?>" <?=$checked?>></td>
            <td><input type="month" name="<?=$rok_miesiac?>" value="<?=in_array($termin, ($_POST['Termin'] ?? [])) && $_POST[$rok_miesiac] ? $_POST[$rok_miesiac] : '' ?>"></td>
            <br>
         </tr>
        <?php
        }
         ?>
        <td colspan=3 style="text_align" ><input type="submit" value="Zapisz"></td>
        </table>
<pre>
<?php
//print_r($_POST);
if($ZapiszDoPliku){
    $fileName = "terminy.txt";
    $json = json_encode($_POST);
    $fileHandle = fopen($fileName, "a");
    $data = date("Y-m-d H:i:s")."\n".$json;
    fwrite($fileHandle, $data);
    fclose($fileHandle);
    ?>
        <p><?=$json?></p>
        <p>Dane zostały zapisane do pliku <?=$fileName?>.</p>
    <?php
}
?>
<pre>
</form> 
</body>
</html>