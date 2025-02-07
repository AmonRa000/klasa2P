<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    fieldset{
        border-width: 2px;
        border-color: blue;
    }
</style>
<body>
    <fieldset>
        <legend>Alfabet</legend>
        <form method="post">
            <?php
            foreach(range('a','z') as $litera){
                $checked =(!empty($_POST["litera"]) && in_array($litera, $_POST["litera"])) ? "checked" : "";
                ?>
                <input <?= $checked?> type="checkbox" name="litera[]" id="litera_<?=$litera?>" value="<?=$litera?>"><?=$litera?>
                <label for="litera_<?=$litera?>"></label>
                <?php
            }
            ?>
        <input type="submit" name="Wybierz" value="Wybierz">
    </form>
        <?php
        if(!empty($_POST["litera"])){
            $wybrane =$_POST["litera"];
            if(count($wybrane)==1){
                ?>
                <p>
                    Ta litera została wybrana: <?=$wybrane[0]?>.
                </p>
                <?php
            }else if(count($wybrane)>1){
            ?>
                <p>
                    Te litery zostały wybrane: <?=implode(', ', $wybrane)?>.
                </p>
            <?php
        }
        }else{
            ?>
            <p>
                Zadna litera nie zsotałą wybrana.
            </p>
            <?php
        }
        




        ?>
    </fieldset>
</body>
</html>