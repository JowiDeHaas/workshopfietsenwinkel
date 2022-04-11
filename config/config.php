<?php
include "connect.php";




function insertFiets($merk, $kleur, $model, $versnellingen, $elektrisch, $remtype, $prijs)
{
    $sql = "INSERT INTO `fietsen`(`id`, `merk`, `kleur`, `model`, `versnellingen`, `elektrisch`, `remtype`, `prijs`) VALUES ('$merk', '$kleur', '$model', $versnellingen, $elektrisch, '$remtype', $prijs)";
    return $sql;
}

function db_getData($query){
    $mysqli = connect();
    $result = $mysqli->query($query);
    $mysqli ->close();
    return $result;
}

//INSERT INTO `users`(`voornaam`, `achternaam`, `wachtwoord`, `email`, `huisnummer`, `straatnaam`, `stadnaam`, `land`) VALUES
//('Cas','Ollie','ww','lol@gmail.com','1','Berkstraat','Doetin','Hong Kong');

//INSERT INTO `fietsen`(`merk`, `kleur`, `model`, `versnellingen`, `elektrisch`, `remtype`, `prijs`) VALUES ('Altec','Bruin','Uni',7,false,'Shimano 7 speed',56);