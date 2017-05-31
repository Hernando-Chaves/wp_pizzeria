jQuery(function($){
	// MOSTRAR OCULTAR MENU
	jQuery('.menu-responsive').on('click',function(){
		jQuery('#id_menu').slideToggle(600);
		return false;
	});

	// REACCIONAR A REDIMENSIONAR LA PANTALLA
	var breakpoint = 768;
	jQuery(window).resize(function(){
		ajustarCaja();
		
		if(jQuery(document).width()>= breakpoint)
		{
			jQuery('#id_menu').css('display','flex');
		} else {
			jQuery('#id_menu').hide();
		}
	});
	// AJUSTAR TAMAÑO DE LAS CAJAS
	function ajustarCaja()
	{
		var img = jQuery('.img-caja');
		if(img.length > 0)
		{
			var altura = img[0].height;
			var caja   = jQuery('.info-caja');
			jQuery(caja).each(function(i, elemento){
				jQuery(elemento).css({'height':altura+'px'});
			});
		}
	}
}); 