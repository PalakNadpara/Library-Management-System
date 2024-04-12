<?php
$server = "localhost";
$username = "root";
$password = "Om@2112#";
$db = "Member";

$con = mysqli_connect($server, $username, $password,$db);

if (!$con) {
       die("connection to this database is faild due to " .
              mysqli_connect_error());
}
//echo "Succes connecting to the db";
?>