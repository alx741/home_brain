<!DOCTYPE html>
<html lang="es">
<head> 
<title> Checking... </title> 
<meta charset="UTF-8">
</head>
<body>

<?php

include('./config.php');

$pass = $_POST['passwd'];

//Comparing password
if(md5($pass) == $pass_md5)
{

	session_start();
	$_SESSION['loged']='true'; //TODO:  This is fucking stupid, change it!!
	echo "<meta http-equiv='Refresh' content='1;url=./panel.php'>";
	die;

}else{

	echo "<meta http-equiv='Refresh' content='1;url=./index.php'>";
	die;

}

?>

</body>
</html>
