<?php
    include "studiji.php";
    include "studenti.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        *{
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }
        body {
            background-color: rgb(231, 231, 231);
            font-family: 'Lato', sans-serif;
        }
    </style>
    <title>Zadatak 3</title>
</head>
<body>
    <h1>Tablica studija</h1>
    <table border=1px >
        <tr>
            <th>Studiji</th>
            <th>Studenti</th>
        </tr>
        <?php
            foreach ($aktivni_studiji as $keyStudiji => $valueStudiji) {
                $brojStudenata = 0;
                foreach ($upisani_studenti as $keyStudenti => $valueStudenti) {
                    if($valueStudenti["grupe"]["Grupa_prva"]==$keyStudiji || $valueStudenti["grupe"]["Grupa_druga"]==$keyStudiji){
                        $brojStudenata++; 
                    }
                }

                echo "<tr><td>". $valueStudiji["naziv_studija"] ."</td><td>". $brojStudenata ."</td></tr>";
            }
        ?>
    </table>
</body>
</html>