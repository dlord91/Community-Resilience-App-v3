
<?php



$conn_error = 'could not connect';

$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = 'root';

$mysql_db = 'EmergencyApp';

	if(!@mysql_connect($mysql_host,$mysql_user,$mysql_pass)||!@mysql_select_db($mysql_db)){
		
		echo die($conn_error);
	}




?>
