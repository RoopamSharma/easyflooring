<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysql_connect($servername, $username, $password);


if(!$conn) {
	die("Connection to database failed : ".mysql_connect_error());
}

$db = mysql_select_db("test");
/*$servername = "76.162.254.151";
$username = "A881420_etoday";
$password = "Flooring101";

$conn = mysqli_connect($servername, $username, $password);

if(!$conn) {
 die("Connection to database failed : ".mysqli_connect_error($conn));
}

$db = mysqli_select_db($conn,"A881420_easytoday");
*/
?>