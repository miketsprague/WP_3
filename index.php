<?php

// Debatably the MOST secure system of all time.
$password = "password";

$given = $_REQUEST["password"];
$given = (strcmp($given, "WRIT2") == 0);

if(!$given) { 
echo "
<form action=\"index.php\" method=\"post\">
Password: <input type=\"text\" name=\"password\">
<input type=\"submit\">
</form> ";
} else {

include("writ2");
}


?>
