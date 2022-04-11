<?php include 'Header.php' ?>
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
        <h1>Damesfiets Altec Bronskleur</h1>
        <img src="../img/damesfiets1.jpg" alt="">
        <p><?php echo '€'. $prijs?></p>
        <br>
        <button type="submit">Winkelwagen</button>

        <h2>Beschrijving</h2>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
            et dolore magna aliqua. Rutrum quisque non tellus orci. Tortor id aliquet lectus proin nibh nisl.
            Eu feugiat pretium nibh ipsum consequat nisl vel pretium. Amet cursus sit amet dictum sit amet justo donec.
            A condimentum vitae sapien pellentesque. Blandit cursus risus at ultrices mi. Dignissim cras tincidunt
            lobortis feugiat vivamus at augue eget arcu. Cursus sit amet dictum sit amet. Ut venenatis tellus in metus.
            Ante metus dictum at tempor. Hendrerit dolor magna eget est lorem ipsum dolor sit. Sed ullamcorper morbi
            tincidunt ornare massa eget egestas purus viverra. Quisque egestas diam in arcu cursus euismod quis.
            Vel pretium lectus quam id leo in vitae. Cras adipiscing enim eu turpis egestas pretium aenean pharetra.
        </p>
        <br>
        <h2>Specificaties</h2>
        <table>

            <tr>
                <th>Artikelnummer</th>
                <td><?php echo $id?></td>
            </tr>
            <tr>
                <th>Merk</th>
                <td><?php echo $merk?></td>
            </tr>
            <tr>
                <th>Kleur</th>
                <td><?php echo $kleur?></td>
            </tr>
            <tr>
                <th>Model</th>
                <td><?php echo $model?></td>
            </tr>
            <tr>
                <th>Aantal versnellingen</th>
                <td><?php echo $versnellingen?></td>
            </tr>
            <tr>
                <th>Elektrisch</th>
                <td><?php echo $elektrisch?></td>
            </tr>
            <tr>
                <th>Type rem</th>
                <td><?php echo $remtype?></td>
            </tr>
        </table>
        <br>
<!--        <h2>Ook interessant</h2>-->
<!--        <img src="../img/damesfiets2.png" alt="">-->
<!--        <h3>Popal Daily Dutch Basic damesfiets Mat Zwart</h3>-->
<!--        <p>€389,-</p>-->
<!--        <button type="submit">Winkelwagen</button>-->
<!--        <img src="../img/herenfiets1.jpg" alt="">-->
<!--        <h3>Popal City Herenfiets Leger Groen</h3>-->
<!--        <p>€249,-</p>-->
        <button type="submit">Winkelwagen</button>
    </div>
    <br>

<?php include 'Footer.php' ?>
