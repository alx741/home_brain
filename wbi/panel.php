<!DOCTYPE html>

<!--TODO:

	Write a nice CSS for this shit

-->

<?php

session_start();

if($_SESSION['loged']!='true'){

echo "<meta http-equiv='Refresh' content='1;url=./index.php'>";
die;

}

include('./config.php');

?>

<html lang="es">

<head> 
	<title> Control Panel </title> 
	<meta charset="utf-8">
</head>

<body>

	<header>
		<h1> Home_brain Control Panel </h1>
	</header>

	<section>

		<article>

			<header>
			<br><p><h2> <?php echo $CONTROL_1; ?> </h2>
			</header>


			<p>
			<FORM name ="form1" method ="get" action ="execute.php">

			<Input type = 'Radio' Name ='state' value= 'on'> On<br>

			<Input type = 'Radio' Name ='state' value= 'off'> Off<br>
			<Input type = 'Hidden' Name ='control' value='1'>

			<Input type = "Submit" Name = "ok" VALUE = "Ok">

			</FORM>
					

		</article>


		<article>

			<header>
				<br><p><h2> <?php echo $CONTROL_2; ?> </h2>
			</header>


			<p>
			<FORM name ="form2" method ="get" action ="execute.php">

			<Input type = 'Radio' Name ='state' value= 'on'> On<br>

			<Input type = 'Radio' Name ='state' value= 'off'> Off<br>
			<Input type = 'Hidden' Name ='control' value='2'>

			<Input type = "Submit" Name = "ok" VALUE = "Ok">

			</FORM>
					

		</article>



		<article>

			<header>
				<br><p><h2>  <?php echo $CONTROL_3; ?> </h2>
			</header>


			<p>
			<FORM name ="form3" method ="get" action ="execute.php">

			<Input type = 'Radio' Name ='state' value= 'on'> On<br>

			<Input type = 'Radio' Name ='state' value= 'off'> Off<br>
			<Input type = 'Hidden' Name ='control' value='3'>

			<Input type = "Submit" Name = "ok" VALUE = "Ok">

			</FORM>
					

		</article>


		<article>

			<header>
				<br><p><h2> <?php echo $CONTROL_4; ?> </h2>
			</header>


			<p>
			<FORM name ="form4" method ="get" action ="execute.php">

			<Input type = 'Radio' Name ='state' value= 'on'> On<br>

			<Input type = 'Radio' Name ='state' value= 'off'> Off<br>
			<Input type = 'Hidden' Name ='control' value='4'>

			<Input type = "Submit" Name = "ok" VALUE = "Ok">

			</FORM>
					

		</article>

		<article>

			<header>
				<br><p><h2> <?php echo $CONTROL_5; ?> </h2>
			</header>


			<p>
			<FORM name ="form5" method ="get" action ="execute.php">

			<Input type = 'Radio' Name ='state' value= 'on'> On<br>

			<Input type = 'Radio' Name ='state' value= 'off'> Off<br>
			<Input type = 'Hidden' Name ='control' value='5'>

			<Input type = "Submit" Name = "ok" VALUE = "Ok">

			</FORM>
					

		</article>


		<article>

			<header>
				<br><p><h2> <?php echo $CONTROL_6; ?> </h2>
			</header>


			<p>
			<FORM name ="form6" method ="get" action ="execute.php">

			<Input type = 'Radio' Name ='state' value= 'on'> On<br>

			<Input type = 'Radio' Name ='state' value= 'off'> Off<br>
			<Input type = 'Hidden' Name ='control' value='6'>

			<Input type = "Submit" Name = "ok" VALUE = "Ok">

			</FORM>
					

		</article>


		<article>

			<header>
				<br><p><h2> <?php echo $CONTROL_7; ?> </h2>
			</header>


			<p>
			<FORM name ="form7" method ="get" action ="execute.php">

			<Input type = 'Radio' Name ='state' value= 'on'> On<br>

			<Input type = 'Radio' Name ='state' value= 'off'> Off<br>
			<Input type = 'Hidden' Name ='control' value='7'>

			<Input type = "Submit" Name = "ok" VALUE = "Ok">

			</FORM>
					

		</article>


	</section>


</body>

</html>


