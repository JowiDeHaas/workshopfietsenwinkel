<?php
//$baseDir = __DIR__;
//$header = $baseDir . "/templates/Header.php";
//$footer = $baseDir . "/templates/Footer.php";
//$content = "Content";
//include $header;
include "header.php";
?>
<div class="container">
    
<!--     --><?php //echo $content ?><!-- -->
    <h1>aanbevolen fietsen</h1>
    <div class=aanbevolen>
        
            <?php
                for($i=0;$i<4;$i++)
                {
                    echo '<a href="Productpagina.php"><img src="../img/herenfiets2.jpg" height="200px"></a>';
                }
            ?>
                   
    </div>
    <div height="200px"></div>
    <h1>Fietsen met korting</h1>
    <div class=aanbevolen>
        
            <?php
                for($i=0;$i<4;$i++)
                {
                    echo '<a href="ProductPagina.php"><img src="../img/herenfiets2.jpg" height="200px"></a>';
                }
            ?>
                   
    </div>
</div>
<?php
//include $footer;
include "footer.php";
?>