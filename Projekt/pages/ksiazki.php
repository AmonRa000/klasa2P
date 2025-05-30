<h1>Tabela Czytelnicy</h1>
<?php
include "db/db_connect.php";

$query = "SELECT ksiazki.Sygnatura, ksiazki.Tytul, ksiazki.Nazwisko, ksiazki.Imie , ksiazki.Wydawnictwo, ksiazki.Miejsce_wyd ,ksiazki.Rok_wyd ,ksiazki.Objetosc_ks, ksiazki.Cena, dzialy.Nazwa FROM ksiazki INNER JOIN dzialy on ksiazki.id_dzial = dzialy.Id_dzial";
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
        <th>Nazwa</th>
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
                <td><?=number_format($row['Cena'],2," zł ","")?>gr</td>
                <td><?=$row['Nazwa']?></td>
            </tr>
            <?php
        }   
    }  
    ?>
</table>
 
<?php
$conn->close();
?>