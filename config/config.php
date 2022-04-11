<?php
include "connect.php";




function insertFiets($merk, $kleur, $model, $versnellingen, $elektrisch, $remtype, $prijs)
{
    $sql = "INSERT INTO `fietsen`(`id`, `merk`, `kleur`, `model`, `versnellingen`, `elektrisch`, `remtype`, `prijs`) VALUES ('$merk', '$kleur', '$model', $versnellingen, $elektrisch, '$remtype', $prijs)";
    return $sql;
}

//INSERT INTO `fietsen`(`merk`, `kleur`, `model`, `versnellingen`, `elektrisch`, `remtype`, `prijs`) VALUES ('Altec','Bruin','Uni',7,false,'Shimano 7 speed',56);