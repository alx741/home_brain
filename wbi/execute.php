<?php

session_start();

if($_SESSION['loged']!='true'){

	echo "<meta http-equiv='Refresh' content='1;url=./index.php'>";
	die;

}

include("config.php");

$control = $_GET['control'];
$state = $_GET['state'];



switch ($control)
{
	case '1':

		if ($state == "on"){

    		exec('sudo ./hdwrctl 2 1');
   
		}else{

    		exec('sudo ./hdwrctl 2 0');

		}
		echo "<meta http-equiv='Refresh' content='1;url=./panel.php'>";
		die;



	case '2':

		if ($state == "on"){

    		exec('sudo ./hdwrctl 3 1');
   
		}else{

    		exec('sudo ./hdwrctl 3 0');

		}
		echo "<meta http-equiv='Refresh' content='1;url=./panel.php'>";
		die;



	case '3':

		if ($state == "on"){

    		exec('sudo ./hdwrctl 4 1');
   
		}else{

    		exec('sudo ./hdwrctl 4 0');

		}
		echo "<meta http-equiv='Refresh' content='1;url=./panel.php'>";
		die;


	case '4':

		if ($state == "on"){

    		exec('sudo ./hdwrctl 5 1');
   
		}else{

    		exec('sudo ./hdwrctl 5 0');

		}
		echo "<meta http-equiv='Refresh' content='1;url=./panel.php'>";
		die;


	case '5':

		if ($state == "on"){

    		exec('sudo ./hdwrctl 6 1');
   
		}else{

    		exec('sudo ./hdwrctl 6 0');

		}
		echo "<meta http-equiv='Refresh' content='1;url=./panel.php'>";
		die;


	case '6':

		if ($state == "on"){

    		exec('sudo ./hdwrctl 7 1');
   
		}else{

    		exec('sudo ./hdwrctl 7 0');

		}
		echo "<meta http-equiv='Refresh' content='1;url=./panel.php'>";
		die;


	case '7':

		if ($state == "on"){

    		exec('sudo ./hdwrctl 8 1');
   
		}else{

    		exec('sudo ./hdwrctl 8 0');

		}
		echo "<meta http-equiv='Refresh' content='1;url=./panel.php'>";
		die;



}
		
?> 
