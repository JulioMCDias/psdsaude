<?php
//Database=localdb;Data Source=127.0.0.1;User Id=azure;Password=6#vWHD_$;Port=56100
$servername = "127.0.0.1:56100";
$database = "psdsaude";
$username = "azure";
$password = "6#vWHD_$";
// Create connection
$conn = mysql_connect($servername, $username, $password);// $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysql_connect_error());
}
echo "Connected successfully";
mysql_close($conn);
?>