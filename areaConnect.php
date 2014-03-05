


<?php
header('Content-type: application/json');

$server = "localhost";
$username = "root";
$password = "root";
$database = "EmergencyApp";

$con = mysql_connect($server, $username, $password) or die ("Could not connect: " . mysql_error());
mysql_select_db($database, $con);

$sql = "SELECT `name`,`area`,`address`,`phoneNum` FROM `adminTable`";
$result = mysql_query($sql) or die ("Query error: " . mysql_error());

$records = array();

while($row = mysql_fetch_assoc($result)) {
	$records[] = $row;
}

mysql_close($con);

echo $_GET['jsoncallback'] . '(' . json_encode($records) . ');';
?>
