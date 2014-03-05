$(document).ready(function(){
		var output = $('#output');
	
		$.ajax({
			url: 'sosConnect.php',
			dataType: 'jsonp',
			jsonp: 'jsoncallback',
			timeout: 5000,
			success: function(data, status){
				$.each(data, function(i,item){ 
					var landmark = '<li>'+item.name+'</li>'
					+ '<li>'+item.phone+'</li>'
					+ '<li>'+item.homeAddress+'</li>'
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

