<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form name="login" action="" method="POST">
	<input type="text" name="xn" placeholder=""><br>
	<input type="text" name="n" placeholder=""><br>
	<input type="submit" value="Login" id="login-form-submit">
</form>
<?php

if (isset($_POST['xn'])&&isset($_POST['n'])){
	$xn = $_POST['xn'];
	$n  = $_POST['n'];
	$summ = 0;
	for($i = 1; $i <= $n; $i++){
		$summ += ($xn**$i)/$i;
	}
	$summ = $summ * (-1);
	echo $summ;
}
?>

</body>
</html>
