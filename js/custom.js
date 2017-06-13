// MAPA DE GOOGLE
var map;
function initMap() {
	var latLong = {
		lat: parseFloat(opciones.latitud),
		lng: parseFloat(opciones.longitud)
	}
  map = new google.maps.Map(document.getElementById('mapa'), {
    center: latLong,
    zoom: parseInt(opciones.zoom)
  });

  var marker = new google.maps.Marker({
  	position: latLong,
  	map: map,
  	title: 'la Pizzeria'
  });
}

jQuery(function($){
	console.log(opciones);
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
	// DIMENSIONAR MAPA
	var mapa = $('#mapa');
	if(mapa.length > 0)
	{
		if($(document).width() >= breakpoint)
		{
			ajustarMapa(0);
		} else {
			ajustarMapa(300);
		}
	} 
	$(window).resize(function(){
		if($(document).width() >= breakpoint)
		{
			ajustarMapa(0);
		} else {
			ajustarMapa(300);
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

	// GALERIA
	jQuery('.gallery a').each(function(){
		jQuery(this).attr({'data-fluidbox' : ''});
	});
	if(jQuery('[data-fluidbox]').length > 0)
	{
		jQuery('[data-fluidbox]').fluidbox();
	}
	// REDIMENSIONAR MAPA
	function ajustarMapa(altura)
	{
		if(altura == 0)
		{
			var ubicacionSection = $('.ubicacion-reservacion');
			var ubicacionAltura  = ubicacionSection.height();

			$('#mapa').css({'height' : ubicacionAltura});

		} else {
			$('#mapa').css({'height' : altura});
		}
	}

}); 