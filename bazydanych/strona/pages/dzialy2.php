<h1>Tabela Czytelnicy</h1>
<?php
include "db_connect.php";

$query = "SELECT * FROM dzialy";
$result = mysqli_query($conn, $query);
?>
<table>
    <tr>
        <th>Id_dzial</th>
        <th>Nazwa</th>
    </tr>
    <?php
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td><?=$row['Id_dzial']?></td>
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