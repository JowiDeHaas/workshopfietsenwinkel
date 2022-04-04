<?php
$baseDir = __DIR__;
$header = $baseDir . "/templates/Header.php";
$footer = $baseDir . "/templates/Footer.php";
$content = "Content";
include $header;
?>
<div class="container">
    
    <!-- <?php echo $content ?> -->
    <h1>aanbevolen fietsen</h1>
    <div class=aanbevolen>
        
            <?php
                for($i=0;$i<4;$i++)
                {
                    echo '<img src="img/herenfiets2.jpg" height="200px">';
                }
            ?>
                   
    </div>
    <div height="200px"></div>
    <h1>Fietsen met korting</h1>
    <div class=aanbevolen>
        
            <?php
                for($i=0;$i<4;$i++)
                {
                    echo '<img src="img/herenfiets2.jpg" height="200px">';
                }
            ?>
                   
    </div>
</div>
<?php
include $footer;
?>