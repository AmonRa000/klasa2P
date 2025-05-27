<h1>Tabela Czytelnicy</h1>
<?php
include "db/db_connect.php";

$query = "SELECT * FROM pracownicy";
$result = mysqli_query($conn, $query);
?>
<table>
    <tr>
        <th>Id_pracownika</th>
        <th>Nazwisko</th>
        <th>Imie</th>
        <th>Id_stanowisko</th>
        <th>Miasto</th>
        <th>Data_zatrudnienia</th>
        <th>Wynagrodzenie</th>
    </tr>
    <?php
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td><?=$row['Id_pracownika']?></td>
                <td><?=$row['Nazwisko']?></td>
                <td><?=$row['Imie']?></td>
                <td><?=$row['Id_stanowisko']?></td>
                <td><?=$row['Miasto']?></td>
                <td><?=$row['Data_zatrudnienia']?></td>
                <td><?=$row['Wynagrodzenie']?></td>
            </tr>
            <?php
        }   
    }  
    ?>
</table>
 
<?php
$conn->close();
?>