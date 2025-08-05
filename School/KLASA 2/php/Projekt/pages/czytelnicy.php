<h1>Tabela Czytelnicy</h1>
<?php
include "db/db_connect.php";

$query = "SELECT * FROM Czytelnicy";
$result = mysqli_query($conn, $query);
?>
<table>
    <tr>
        <th>Nr_czytelnika</th>
        <th>Nazwisko</th>
        <th>Imie</th>
        <th>Data_ur</th>
        <th>Ulica</th>
        <th>Kod</th>
        <th>Miasto</th>
        <th>Data_zapisania</th>
        <th>Data_skreslenia</th>
        <th>Nr_legitymacji</th>
        <th>Funkcja</th>
        <th>Plec</th>
    </tr>
    <?php
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $split = str_split($row['Kod'],2)?>
            <tr>
                <td><?=$row['Nr_czytelnika']?></td>
                <td><?=$row['Nazwisko']?></td>
                <td><?=$row['Imie']?></td>
                <td><?=$row['Data_ur']?></td>
                <td><?=$row['Ulica']?></td>
                <td><?=$split[0].'-'.$split[1].$split[2]?></td>
                <td><?=$row['Miasto']?></td>
                <td><?=$row['Data_zapisania']?></td>
                <td><?=$row['Data_skreslenia']?></td>
                <td><?=$row['Nr_legitymacji']?></td>
                <td><?=$row['Funkcja']?></td>
                <td>
                    <?php
                        if($row['Plec'] == 'K'){
                            echo 'kobieta';
                        }
                        if($row['Plec'] == 'M'){
                            echo 'mężczyzna';
                        }
                    ?>
                </td>
            </tr>
            <?php
        }   
    }  
    ?>
</table>
 
<?php
$conn->close();
?>