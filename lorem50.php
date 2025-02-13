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
        color:black;
    }
</style>
<body>
    <fieldset>
    <legend>lorem50</legend>
    <?php
    if($_SERVER['REQUEST_METHOD']==="POST"){
        ?>
        <p>
            Oto wpisany tekst:
        </p>
        <p style="color:;">
            <?=$tekst=$_POST["lorem"];?>
        </p>
        <?php
    }else{
    ?>
        <form method="post">
            <textarea name="lorem" id="" cols="50" rows="5">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus modi iure placeat quas nihil omnis animi at delectus ea cumque ipsum maiores tempora deleniti laborum molestias doloremque assumenda, laboriosam adipisci quidem labore minus. Ab blanditiis quisquam voluptatibus distinctio in quibusdam quasi rerum officiis minima. Repudiandae natus quibusdam culpa debitis at!
            </textarea>
            <input type="submit" name="wyślij" value="wyślij">
        </form>
    <?php
    }
    ?>
    </fieldset>
</body>
</html>