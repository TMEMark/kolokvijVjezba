<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak 1</title>
</head>
<body>
    <form method="get">
        Broj:<input name="broj" type="text">
        <input type="submit" name="submit1" value="Varijanta1" id="button"/>
        <input type="submit" name="submit2" value="Varijanta2" id="button"/>
        <input type="submit" name="submit3" value="Varijanta3" id="button"/>
    </form>
    <?php
        $broj = isset($_GET["broj"]) ? $_GET["broj"] : 10 ;
        if(isset($_GET["submit1"]) && $_GET["submit1"]=="Varijanta1"){
            
            for ($i=$broj; $i>=1 ; $i--) { 
                echo $i . "</br>";
            }
        }

        if(isset($_GET["submit2"]) && $_GET["submit2"]=="Varijanta2"){
            
            for ($i=$broj; $i>=1 ; $i--) { 
                for($x=$i; $x>=1 ; $x--){
                    echo $x . ".";
                }
                echo "</br>";
            }
        }

        if(isset($_GET["submit3"]) && $_GET["submit3"]=="Varijanta3"){
            
            for ($i=$broj; $i>=1 ; $i--) { 
                for($x=$i; $x>=1 ; $x--){
                    echo $x . ".";
                }
                
                echo "</br>";
            }


            for($g=$i+2; $g<=$broj ;$g++){
                for($y=$g; $y>=1 ;$y--){
                    echo $y . ".";
                };
                echo "<br>";
            }    
        }

    ?>
</body>
</html>