<?php
include 'Header.php';
?>
<div class="container">
    <img src="../img/Legeprofielfoto.jpg" height="150px" width="150px">
    <h1>Profielnaam</h1>
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