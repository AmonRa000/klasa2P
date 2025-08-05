<h1>Tabela Czytelnicy</h1>
<?php
include "db/db_connect.php";

$query = "SELECT * FROM wypozyczenia";
$result = mysqli_query($conn, $query);
?>
<table>
    <tr>
        <th>Nr_transakcji</th>
        <th>Sygnatura</th>
        <th>Id_pracownika</th>
        <th>Nr_czytelnika</th>
        <th>Data_wypozyczenia</th>
        <th>Data_zwrotu</th>
    </tr>
    <?php
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td><?=$row['Nr_transakcji']?></td>
                <td><?=$row['Sygnatura']?></td>
                <td><?=$row['Id_pracownika']?></td>
                <td><?=$row['Nr_czytelnika']?></td>
                <td><?=$row['Data_wypozyczenia']?></td>
                <td><?=$row['Data_zwrotu']?></td>
            </tr>
            <?php
        }   
    }  
    ?>
</table>
 
<?php
$conn->close();
?>