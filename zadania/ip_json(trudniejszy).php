<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["adres"])) {
    $ip = trim($_POST["adres"]);
    $url = "http://ip-api.com/json/" .$ip;
    
    $json = file_get_contents($url);
    $dane = json_decode($json, true); 
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IP_json</title>
</head>
<body>
    <form method="POST">
        <p>Sprawdź przybliżoną lokalizacje adresu IP v.4</p>
        <label for="adres">http://ip-api.com/json/</label>
            <select name="adres" id="adres">
                <option value="" selected></option>
                <option value="1.1.1.1">1.1.1.1</option>
                <option value="2.2.2.2">2.2.2.2</option>
                <option value="3.3.3.3">3.3.3.3</option>
                <option value="4.4.4.4">4.4.4.4</option>
                <option value="5.5.5.5">5.5.5.5</option>
                <option value="6.6.6.6">6.6.6.6</option>
                <option value="7.7.7.7">7.7.7.7</option>
                <option value="8.8.8.8">8.8.8.8</option>
                <option value="9.9.9.9">9.9.9.9</option>
                <option value="10.10.10.10">10.10.10.10</option>
            <input type="submit" value="Sprawdź IP">
            </select>
    </form>
    
    <?php if (isset($json)): ?>
        <fieldset>
            <legend>Zwrócone dane (JSON):</legend>
        <pre><?= htmlspecialchars($json); ?></pre>
        </fieldset>
        <fieldset>
            <legend>Zwrócone dane (array)</legend>
        <pre><?= print_r($dane); ?></pre>
        </fieldset>
    <?php endif; ?>
</body>
</html>