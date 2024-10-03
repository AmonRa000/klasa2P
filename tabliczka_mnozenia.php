<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Tabliczka mnożenia</title>
    <style>
        table { border-collapse: collapse; font-family: Verdana; font-size: large; border: 1px solid black; }
        th, td { border: 1px solid black; padding: 5px; text-align: center; vertical-align: middle; }
        th { background-color: burlywood; }
        th:first-child { background-color: beige; }
        td { background-color: bisque; }
        .prime { background-color: orange; }
        .composite { background-color: white; }
    </style>
</head>
<body>
    <table>
        <tr>
            <th></th>
            <?php for ($i = 1; $i <= 10; $i++): ?>
                <th><?php echo $i; ?></th>
            <?php endfor; ?>
        </tr>
        <?php
        function is_prime($num) {
            if ($num < 2) return false;
            for ($i = 2; $i <= sqrt($num); $i++) {
                if ($num % $i == 0) return false;
            }
            return true;
        }

        for ($i = 1; $i <= 10; $i++): ?>
            <tr>
                <th><?php echo $i; ?></th>
                <?php for ($j = 1; $j <= 10; $j++): 
                    $product = $i * $j;
                    $class = is_prime($product) ? 'prime' : 'composite';
                ?>
                    <td class="<?php echo $class; ?>"><?php echo $product; ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>
