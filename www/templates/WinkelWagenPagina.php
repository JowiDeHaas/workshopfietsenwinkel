<?php
include 'Header.php';
?>
<div class="container">
    <div>
        <table>
            <?php
            $placehold = '<tr>
                <td><img src=""></td>
                <td><b>Fiets</b></td>
                <td>Op voorraad</td>
                <td>aantal <input type="number" value="1"></td>
                <td>69.42</td>
            </tr>';
            for($i = 0; $i < 6; $i++)
            {
                echo $placehold;
            }
            ?>
        </table>
        <button>Bestellen</button>
    </div>
</div>
<?php
include 'Footer.php';
?>