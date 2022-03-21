<?php
$baseDir = __DIR__;
$header = $baseDir . "/templates/Header.php";
$footer = $baseDir . "/templates/Footer.php";
$content = "Content";
include $header;
?>
<div class="container">
    <br>
    <?php echo $content ?>
    <br>
</div>
<?php
include $footer;
?>