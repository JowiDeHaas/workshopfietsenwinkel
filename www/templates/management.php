<?php
include 'Header.php';
?>
<div class="container">
    <table>
        <tr>
            <th>ID</th>
            <th>Merk</th>
            <th>Type</th>
            <th>Gewicht</th>
            <th>Wielmaat</th>
            <th>Elektrisch</th>
            <th>Versnellingen</th>
        </tr>
        <?php
            $placeholder = '<tr>
            <td>1</td>
            <td>Gazelle</td>
            <td>Fiets</td>
            <td>5kg</td>
            <td>5</td>
            <td>false</td>
            <td>5</td>
            <td>update</td>
            <td>delete</td>
        </tr>';
        for($i = 0; $i < 6; $i++)
            {
                echo $placeholder;
            }
        ?>
        
        
            
    </table>
    <form action="#">
        <h4>ID:<input type="text" name="" id=""></h4>
        <h4>Merk:<input type="text" name="" id=""></h4>
        <h4>Type:<input type="text" name="" id=""></h4>
        <h4>Gewicht:<input type="text" name="" id=""></h4>
        <h4>Wielmaat:<input type="text" name="" id=""></h4>
        <h4>Elektrisch:<input type="text" name="" id=""></h4>
        <h4>Versnellingen:<input type="text" name="" id=""></h4>
        <button type="submit" name="">Voeg toe</button>
    </form>
</div>   
<?php
include 'Footer.php';
?>





