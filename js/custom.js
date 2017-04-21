jQuery(function($){

	$('.menu_responsive').on('click',function(){
		$('.menu-sitio').toggle('slow');
		return false;
	});

	// CAJAS CONTENIDO  - NOSOTROS
	$(window).resize(function(){
		ajustarCajas();
	});


	function ajustarCajas() 
	{
		var imgs = $('.imagen-caja');

		if(imgs > 0)
		{
			var cajas  = $('.contenido-caja');
			var altura = imgs[0].height;

			$(cajas).each(function(i,elemento){
				$(elemento).css({'height' : altura+'px'});
			});
		}
	}

	// FLUIDBOX
	jQuery('.gallery a').each(function(){
		jQuery(this).attr({'data-fluidbox' : ''});
	});
	if(jQuery('[data-fluidbox]').length > 0)
	{
		jQuery('[data-fluidbox]').fluidbox();
	}
}); 