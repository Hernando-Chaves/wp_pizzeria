<?php 

	if(! function_exists('pizzeria_guardar_reservaciones'))
	{
	
		function pizzeria_guardar_reservaciones()
		{
	       
			if(isset($_POST['enviar']) && $_POST['oculto'] == '1'):
				global $wpdb;

				$nombre   = sanitize_text_field($_POST['nombre']);
				$fecha    = sanitize_text_field($_POST['fecha']);
				$correo   = sanitize_text_field($_POST['correo']);
				$telefono = sanitize_text_field($_POST['telefono']);
				$mensaje  = sanitize_text_field($_POST['mensaje']);

				$tabla = $wpdb->prefix . 'reservaciones';
				echo $nombre.' - '.$fecha.' - '.$correo.' - '.$telefono.' - '.$mensaje.' - '.$tabla;

				$datos = array(
				    'nombre'   =>  $nombre,
				    'fecha'    =>  $fecha,
				    'correo'   =>  $correo,
				    'telefono' =>  $telefono,
				    'mensaje'  =>  $mensaje
				);

				$formato = array(
					'%s',
					'%s',
					'%s',
					'%s',
					'%s'
				);

				$wpdb->insert($tabla, $datos, $formato);

				$url = get_page_by_title('Bienvenida');
				wp_redirect(get_permalink($url->ID));
				exit();

			endif;

	
		}
	
	}
	add_action('init','pizzeria_guardar_reservaciones'); 