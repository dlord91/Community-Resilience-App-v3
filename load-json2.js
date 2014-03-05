$(document).ready(function(){
		var output = $('#output');
	
		$.ajax({
			url: 'sosConnect.php',
			dataType: 'jsonp',
			jsonp: 'jsoncallback',
			timeout: 5000,
			success: function(data, status){
				$.each(data, function(i,item){ 
					var landmark = '<label  for="name">Full Name</label>
				              	<input name="name" id="name" type="text" value="'+item.name+'"/>'
				              	+ '<label  for="number">Phone Number</label>
				              	<input name="number" id="number" type="number" value="'+item.phone+'"/>'
					+ '<label for="description">Address</label>
							  	<textarea name="address" id="address" placeholder="Address" type="text">'+item.homeAddress+'</textarea>'
					+ '<li>'+item.contact1+'</li>'
					+ '<li>'+item.contact2+'</li>'
					+ '<li>'+item.contact3+'</li>'
					+ '<li>'+item.details+'</li>';
					
									
				
					output.append(landmark);
				});
			},
			error: function(){
			   output.text('There was an error loading the data.');
			}
		});

});

