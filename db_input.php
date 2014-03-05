
	
	<?php
$server = "localhost";
$username = "root";
$password = "root";
$database = "EmergencyApp";

$con = mysql_connect($server, $username, $password) or die ("Could not connect: " . mysql_error());

mysql_select_db($database, $con);


	$name = mysql_real_escape_string($_POST['name']);
	$number = mysql_real_escape_string($_POST['number']);
	$area = mysql_real_escape_string( $_POST['area']);
	$address = mysql_real_escape_string($_POST['address']);
	$description = mysql_real_escape_string($_POST['description']);
	
	$name1 = mysql_real_escape_string($_POST['name1']);
	$number1 = mysql_real_escape_string($_POST['number1']);
	
	$name2 = mysql_real_escape_string($_POST['name2']);
	$number2 = mysql_real_escape_string($_POST['number2']);
	
	$name3 = mysql_real_escape_string($_POST['name3']);
	$number3 = mysql_real_escape_string($_POST['number3']);
	
	
	
	if (isset($name) && !empty($name) &&
			isset($number) && !empty($number) &&
			isset($area) && !empty($area) &&
			isset($address) && !empty($address) &&
			isset($description) && !empty($description) &&
			isset($name1) && !empty($name1) &&
			isset($number1) && !empty($number1) &&
			isset($name2) && !empty($name2) &&
			isset($number2) && !empty($number2) &&
			isset($name3) && !empty($name3) &&
			isset($number3) && !empty($number3)
		){


				$con1 = array($name1,$number1);
				$contact1 = implode(', ',$con1);
				
				$con2 = array($name2,$number2);
				$contact2 = implode(', ',$con2);
				
				$con3 = array($name3,$number3);
				$contact3 = implode(', ',$con3);



$sql = "INSERT INTO `userTable` VALUES (
		
		'',
		'{$name}',
		'{$number}',
		'{$address}',
		'{$area}',
		'{$contact1}',
		'{$contact2}',
		'{$contact3}',
		'{$description}'
		)";

if (!mysql_query($sql, $con)) {
	die('Error: ' . mysql_error());
} else {
	echo "data added";
}

mysql_close($con);
}
?>	
		
		
