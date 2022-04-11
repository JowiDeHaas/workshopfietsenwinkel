<?php
include 'Header.php';
?>
<?php
$data = db_getData("SELECT * FROM users WHERE 1");
if ($data->num_rows > 0) {
    while($row = $data->fetch_assoc()) {
//                    printf("Id: %s, Title: %s, Author: %s, Date: %d <br />",
        $id = $row["id"];
        $voorn = $row["voornaam"];
        $achtern = $row["achternaam"];
        $ww = $row["wachtwoord"];
        $mail = $row["email"];
        $hnummer = $row["huisnummer"];
        $straatn = $row["straatnaam"];
        $stadn = $row["stadnaam"];
        $land = $row["land"];
        $postcode = $row["postcode"];
    }
} else {
    printf('No record found.<br />');
}
?>
<div class="container">
    <a href="index.php"><button>Uitloggen</button></a><br>
    <img src="../img/Legeprofielfoto.jpg" height="150px" width="150px">
    <h1><?php echo $voorn . " " . $achtern?></h1>
    <h3>Wachtwoord: <?php echo $ww ?></h3>
    <h3><?php echo $mail?></h3>
    <h3>Adres: <?php echo $hnummer . " " . $straatn . ", " . $stadn . ", ". $land . ", " . $postcode  ?></h3>
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