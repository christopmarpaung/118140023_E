<!DOCTYPE>
<html>
<head>
    <title>mencari bilangan prima 1 sampai 10</title>
</head>
<body>
CHRISTOP PASU MARPAUNG 118140023
<?php
    for($i=1;$i<=50;$i++){ 
            $a = 0;
            for($j=1;$j<=$i;$j++){
                if($i % $j == 0){
                    $a++;
                }
            }
            if($a == 2){
            echo $i.' ';
            }
        }
    ?>
</body>
</html>