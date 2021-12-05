<?php
    include "odsjeci_i_katedre.php";
    include "studiji.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak 2</title>
</head>
<body>
    <div class="head">
        <h1>Dio 1.</h1>
        <form method="post">
            <select name="valueOdsjeci">
                <option>svi</option>
                <?php
                    foreach ($ustrojbene_jedinice as $keyOdsjeci => $valueOdsjeci) {
                        echo "<option>" . $valueOdsjeci . "</option>" ;
                    }
                ?>
                <input type="submit" name="submit" value="Prikaži">
            </select>
        </form>
    </div>
    <div class="body">
        <h1>Dio 2.</h1>
        <h2>Preddiplomski studiji</h2>
            <?php
                $prikaz = isset($_POST["valueOdsjeci"]) ? $_POST["valueOdsjeci"] : "svi";;
                foreach ($aktivni_studiji as $keyStudiji => $valueStudiji) {
                    if($valueStudiji["razina_studija"] == "preddiplomski" && $prikaz==$valueStudiji["odsjek_katedra"] || $prikaz=="svi"){
                        echo $valueStudiji["naziv_studija"] . "</br>";
                    }
                }
            
                
            
            ?>
        <h2>Diplomski studiji</h2>
            <?php
                foreach ($aktivni_studiji as $keyStudiji => $valueStudiji) {
                    if($valueStudiji["razina_studija"] == "diplomski" && $prikaz==$valueStudiji["odsjek_katedra"] || $prikaz=="svi"){
                        echo $valueStudiji["naziv_studija"] . "</br>";
                    }
                }
            
            ?>
    </div>
</body>
</html>