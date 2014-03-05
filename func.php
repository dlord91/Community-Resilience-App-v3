<?php


function head($title){
	
	?>
	
	<html>
	<head> 
		<title><?php echo $title; ?></title>
		<link rel="stylesheet" type="text/css" href="main.css"/>
	
	<meta name="viewport" content="width=300"/>
	
<?php	
}


function nav($home){
	?>
	
	<div id="topNav">
	<?php if($home == true){?>
	<a href="index.php">Back</a>
	<?php } ?>
	<a href="PersonalDetails.php">
		<img src="img/account.png" alt="account" width="46" height="46" />
	</a>
</div><!--topNav-->

	
	<?php
}



function emergency($area){
		
	$query ="SELECT `name`,`area`,`address`,`phoneNum` FROM `adminTable` WHERE `area`= '".$area."'"; 
		    $dbresult = mysql_query($query);
			
		
			
		    while($content = mysql_fetch_assoc($dbresult)){
		    	
		    ?>
		    <div class="serviceCon">
			    
		    
			   	<div class="service"><p><?php echo $content['name']; ?>: <?php echo $content['area']; ?></p></div><!--service-->
					
					
				<a href="tel:<?php echo $content['phoneNum']; ?>">Call: <?php echo $content['phoneNum']; ?></a>
							
					<div class="serviceAdd"><p><?php echo $content['address']; ?></p></div><!--serviceAdd-->
					
					
			 </div><!--service-->
						
				<?php			
							
				}
	}


	function getField($field){
			$query = "SELECT id FROM `userTable`";
			
			
			if($query_run = mysql_result(mysql_query($query), 0, $field)){
					return $query_run;
			}
		}



?>
