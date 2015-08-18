function colors(){
	var color  	   = $('.color'),
		stylesheet = $('#stylesheet');

		color.on('click',function(){

			colores = $(this).data('color');
			style = 'css/'+colores+'.css';

			stylesheet.attr("href",style);
			
		});		
};

 function option(){
		option = $('.nut'),
		colors = $('.tabColor'),
		lang   = $('.tablang'); 	

		option.on('click',function(){
	 		$('.contentOption').toggle('slow');
		});

		colors.on('click',function(){
	 		$('.contencolor').toggle('slow');
		});

		lang.on('click',function(){
	 		$('.contenLan').toggle('slow');
		});

	}
$(document).on('ready',function(){
	colors();
	option();
});