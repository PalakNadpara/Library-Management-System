<?php
$server = "localhost";
$username = "root";
$password = "Om@2112#";
$db = "Book_Issue";

$con2= mysqli_connect($server, $username, $password,$db);

if (!$con2) {
       die("connection to this database is faild due to " .
              mysqli_connect_error());
}
//echo "Succes connecting to the db";
?>