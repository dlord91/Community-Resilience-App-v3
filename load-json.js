$(document).ready(function(){
		var output = $('#output');
	
		$.ajax({
			url: 'areaConnect.php',
			dataType: 'jsonp',
			jsonp: 'jsoncallback',
			timeout: 5000,
			success: function(data, status){
				$.each(data, function(i,item){ 
					var landmark = '<div class="serviceCon"><div class="service"><p>'+item.name+'</p></div>'
					+ '<a href="tel:'+item.phoneNum+'">Call: '+item.phoneNum+'</a>'
					+'<div class="serviceAdd"><p>'+item.address+'</p></div></div>';
				
					output.append(landmark);
				});
			},
			error: function(){
			   output.text('There was an error loading the data.');
			}
		});

});

