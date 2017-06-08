<?php 

	if(! function_exists('pizzeria_guardar_reservaciones'))
	{
	
		function pizzeria_guardar_reservaciones()
		{
			global $wpdb;
	       
			if(isset($_POST['enviar']) && $_POST['oculto'] == '1'):

				$nombre   = sanitize_text_field($_POST['nombre']);
				$fecha    = sanitize_text_field($_POST['fecha']);
				$correo   = sanitize_text_field($_POST['correo']);
				$telefono = sanitize_text_field($_POST['telefono']);
				$mensaje  = sanitize_text_field($_POST['mensaje']);

				$tabla = $wpdb->prefix.'reservaciones';
			
				$datos = [
				    'nombre'   =>  $nombre,
				    'fecha'    =>  $fecha,
				    'correo'   =>  $correo,
				    'telefono' =>  $telefono,
				    'mensaje'  =>  $mensaje
				];

				$formato = ['%s','%s','%s','%s','%s'];
				

				$wpdb->insert($tabla, $datos, $formato);
				// $wpdb->print_error();

				$url = get_page_by_title('Bienvenida');
				wp_redirect(get_permalink($url->ID));
				exit();

			endif;

	
		}
	
	}
	add_action('init','pizzeria_guardar_reservaciones'); 