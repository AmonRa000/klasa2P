<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dane pobrane z tablicy</title>
</head>
<body>
    <?php
		//Operator ??, znany jako operator łączenia null
        $tablica = []; 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $tablica[] = $_POST["dodaj1"] ?? ''; 
            $tablica[] = $_POST["dodaj2"] ?? ''; 
        }
    ?>

    <form action="" method="post">
        <p>
		<input type="text" name="dodaj1" placeholder="Dodaj element do tablicy"/>
		</p>
        <p>
		<input type="text" name="dodaj2" placeholder="Dodaj kolejny element">
		</p> 
        <input type="submit" value="Dodaj elementy do tablicy">
    </form>

    <h3>Elementy dodane do tablicy:</h3>
    <ul>
    <?php
        foreach ($tablica as $elementy) {
            if ($elementy !== '') {
                echo "<li>" . $elementy . "</li>";
            }
        }
    ?>
    </ul>
</body>
</html>
