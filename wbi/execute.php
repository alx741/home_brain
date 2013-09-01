<?php
$selected = $_POST['state'];
echo 'Control X set: <b>' .  $selected . '</b>';

if ($selected == "on"){

    exec("sudo ./hdwrctl x");
   
}else{

    exec(" sudo ./hdwrctl 0");

}
?> 
