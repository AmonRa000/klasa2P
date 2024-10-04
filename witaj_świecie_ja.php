<
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kon'nichiwa sekai</title>
</head>
<style>
    table{
        border-collapse:collapse;
    }
    td{
        border: 3px dotted red;
        padding: 15px;
    }
</style>
<body>
    <table>
        <tr>
        <?php
            $str="Kon'nichiwa sekai";
            $tab = str_split($str);
            foreach($tab as $elementy){
            echo "<td>".$elementy."<td>";
            }
        ?>
    </tr>
    </table>
</body>
</html>
