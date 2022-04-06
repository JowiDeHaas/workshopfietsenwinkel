<?php

$css = __DIR__.'\css\style.css';



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="<?php echo $css; ?>"> -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <a href="../index.php" id="logo-link"><img src="../img/fiets.jpeg" id="logo"></a>
         <div id="header">
             <div>
                <h1>Fietsenwinkel</h1>
                <p>alles voor uw fietsenwinkel</p>
            </div>
            <table>
                <tr>
                    <th colspan="3">Fietsen</th>
                </tr>
                <tr>
                    <td class="koopmenu" colspan="3"><a href="ProductPagina.php">Fietsen kopen</a></td>
                </tr>
            </table>
       
            <a href="templates/WinkelWagenPagina.php"><img src="../img/winkelwagen.png" id="winkelwagen"></a>
            <a href="templates/registreren.php" ><button class="centerheader">Registreren</button></a>
            <a href="templates/inloggen.php" ><button class="centerheader">Inloggen</button></a>
            <a href="templates/profiel.php" ><button class="centerheader">Profiel</button></a>

            <input type="text" id="zoek"><button>Zoeken</button>
        </div>
        
    </header> 
