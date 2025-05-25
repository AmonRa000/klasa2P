<h1>Tabela Czytelnicy</h1>
<?php
include "db_connect.php";

$query = "SELECT * FROM ksiazki";
$result = mysqli_query($conn, $query);
?>
<table>
    <tr>
        <th>Sygnatura</th>
        <th>Tytul</th>
        <th>Nazwisko</th>
        <th>Imie</th>
        <th>Wydawnictwo</th>
        <th>Miejsce_wyd</th>
        <th>Rok_wyd</th>
        <th>Objetosc_ks</th>
        <th>Cena</th>
        <th>Id_dzial</th>
    </tr>
    <?php
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td><?=$row['Sygnatura']?></td>
                <td><?=$row['Tytul']?></td>
                <td><?=$row['Nazwisko']?></td>
                <td><?=$row['Imie']?></td>
                <td><?=$row['Wydawnictwo']?></td>
                <td><?=$row['Miejsce_wyd']?></td>
                <td><?=$row['Rok_wyd']?></td>
                <td><?=$row['Objetosc_ks']?></td>
                <td><?=$row['Cena']?></td>
                <td><?=$row['Id_dzial']?></td>
            </tr>
            <?php
        }   
    }  
    ?>
</table>
 
<?php
$conn->close();
?>