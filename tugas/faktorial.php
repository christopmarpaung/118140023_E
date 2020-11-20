<!DOCTYPE html>
<html>
<head>
	<title>Faktorial</title>
</head>
<body>
<?php 
    function faktorial($angka){
        $faktorial = 1;
        for($i = $angka ; $i > 0 ; $i--){
            $faktorial = $faktorial * $i;
        }
        return $faktorial;
    }
?>
<form action="" method="POST">
    <input type="number" name="angka" id=angka>
    <button type="submit" name="subBut">Masukkan Angka fatktorial</button>
</form>
<?php 
    if(isset($_POST['subBut'])){
        echo faktorial($_POST['angka']);
    }
?>
</body>
</html>