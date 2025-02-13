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
        border-width: 3px;
        border:solid blue;
    }
    legend{
        border-top:solid blue 3px;
        border-bottom:solid blue 3px;
    }
</style>
<body>
    <fieldset>
    <legend>Najlepszy kompozytor</legend>
        <?php
        if($_SERVER['REQUEST_METHOD']==="POST"){
            ?>
            Według ciebie najlepszym kompozytorem jest <?=$_POST['kompozytor'];?>
            <?php
        }else{
            ?>
            <form method="post">
                <input type="radio" name="kompozytor" id="1" value="Alexander Borodin" required>
                <label for="1">Alexander Borodin</label><br>  
                <input type="radio" name="kompozytor" id="2" value="Fryderyk Chopin"  required>
                <label for="2">Fryderyk Chopin</label><br>
                <input type="radio" name="kompozytor" id="3" value="Edward gierg<"  required>
                <label for="3">Edward gierg</label><br>
                <input type="radio" name="kompozytor" id="4" value="Stanisław Moniuszko"  required> 
                <label for="4">Stanisław Moniuszko</label><br>  
                <input type="radio" name="kompozytor" id="5" value="Giuseppe Verdi"  required> 
                <label for="5">Giuseppe Verdi</label><br>
                <input type="radio" name="kompozytor" id="6" value="Richard Wagner"  required>
                <label for="6">Richard Wagner</label><br><br>
                <input type="submit" name="wyślij" value="Wybierz ulubionego kompozytora">       
            </form>
            <?php
        }
        ?>
        </fieldset>
</body>
</html>