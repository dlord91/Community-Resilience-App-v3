$(document).ready(function(){
		var output = $('#output');
	
		$.ajax({
			url: 'sosConnect.php',
			dataType: 'jsonp',
			jsonp: 'jsoncallback',
			timeout: 5000,
			$str_json = trim($str, '"');
$guests = json_decode($str_json);
var_dump($guests);
			success: function(data, status){
				$.each(data, function(i,item){ 
					var landmark = '<li><a href="sms://+'+item.contact1+'?body=I%20NEED%20HELP%20at%20this%20location%20" title="SOS">SOS</a></li>';
				
					output.append(landmark);
				});
			},
			error: function(){
			   output.text('There was an error loading the data.');
			}
		});

});

