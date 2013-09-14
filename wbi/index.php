<!DOCTYPE html>

<!--TODO:

	Write a nice CSS for this shit

-->

<?php

session_start();

if($_SESSION['loged']=='true'){

echo "<meta http-equiv='Refresh' content='1;url=./panel.php'>";
die;

}

?>

<html lang="es">
<head> 
<title>Home_Brain Login</title>
<meta charset="utf-8">
</head>
<body>

<div align=center>
<B><h2>Login</h2></b>


<FORM name ="login" method ="post" action ="login.php">

<br> Contraseña <Input type = 'password' Name ='passwd' ><br>


<P>
<Input type = "Submit" Name = "Login" VALUE = "Ok">
</div>
</FORM>
</body>
</html>
