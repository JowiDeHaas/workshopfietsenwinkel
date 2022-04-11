<?php
include 'Header.php';
?>
<?php
$data = db_getData("SELECT * FROM fietsen WHERE 1");
if ($data->num_rows > 0) {
    while($row = $data->fetch_assoc()) {
//                    printf("Id: %s, Title: %s, Author: %s, Date: %d <br />",
        $id = $row["id"];
        $merk = $row["merk"];
        $kleur = $row["kleur"];
        $model = $row["model"];
        $versnellingen = $row["versnellingen"];
        $elektrisch = $row["elektrisch"];
        $remtype = $row["remtype"];
        $prijs = $row["prijs"];
    }
} else {
    printf('No record found.<br />');
}
?>
<div class="container">
    <a href="index.php"><button>Uitloggen</button></a><br>
    <img src="../img/Legeprofielfoto.jpg" height="150px" width="150px">
    <h1>Jan Hansen</h1>
    <h3>Wachtwoord: ****************</h3>
    <h3>voorbeeld@gmail.com</h3>
    <h3>Adres: voorbeeld adres</h3>
    <h2>Bestelgeschiedenis</h2>
    <table id="geschiedenis">
        <tr>
            <th>Product</th>
            <th>Aantal</th>
        </tr>
        
        <?php
        for($i=0;$i<10;$i++)
        {
            echo '<tr>
            <td>fiets</td>
            <td>2</td>
        </tr>';
        }
        ?>
    </table>
</div>
<?php
include 'footer.php';
?>