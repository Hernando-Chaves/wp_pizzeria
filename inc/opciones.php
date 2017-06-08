<?php 
 /*
 **************************************************************************
    AGREGAMOS OPCION DEL MENU AJUSTES
 **************************************************************************
 */
	if(! function_exists('pizzeria_ajustes'))
	{
	
		function pizzeria_ajustes()
		{
	       
			add_menu_page('La Pizzeria', 'Ajustes del Tema', 'administrator', 'pizzeria_ajustes', 'pizzeria_opciones_tema','dashicons-admin-tools', '20 ');
			add_submenu_page('pizzeria_ajustes','Reservaciones','Reservaciones','administrator','pizzeria_reervaciones','pizzeria_reservaciones_callback');

			// REGISTRAR LAS OPCIONES QUE APARECEN EN LA SECCION AJUSTES DEL TEMA
			add_action( 'admin_init', 'pizzeria_registrar_opciones' );

		}
	
	}
	add_action('admin_menu','pizzeria_ajustes');
/*
**************************************************************************
   REGISTRAR LAS OPCIONES DEL TEMA
**************************************************************************
*/
   if(! function_exists('pizzeria_registrar_opciones'))
   {
   
	   	function pizzeria_registrar_opciones()
	   	{
	        // SE REGISTRAN LAS OPCIONES UNA POR UNA 
	   		register_setting( 'pizzeria_opciones_group', 'pizzeria_direccion');
	   		register_setting( 'pizzeria_opciones_group', 'pizzeria_telefono');
	   
	   	}
   
   }

/*
**************************************************************************
   CREAMOS EL HTML DE LA OPCION DEL MENU AJUSTES DEL TEMA
**************************************************************************
*/
	if(! function_exists('pizzeria_opciones_tema'))
	{
	
		function pizzeria_opciones_tema()
		{ ?>
	       
			<div id="wrap">
				
				<h1>Ajustes de la Pizzeria</h1>
				<form action="options.php" method="post">
					<?php settings_fields( 'pizzeria_opciones_group' ); ?>
					<?php do_settings_sections( 'pizzeria_opciones_group' ); ?>

					<table class="form-table">
						
						<tr valign="top">
							<th scope="row">Dirección</th>
							<td><input type="text" name="pizzeria_direccion" value="<?php echo esc_attr(get_option('pizzeria_direccion')) ?>"></td>
						</tr>

						<tr valign="top">
							<th scope="row">Teléfono</th>
							<td><input type="text" name="pizzeria_telefono" value="<?php echo esc_attr(get_option('pizzeria_telefono')) ?>"></td>
						</tr>

					</table>
					<?php submit_button(); ?>

				</form>
			</div>
	
		<?php }
	
	}

/*
**************************************************************************
    CREAMOS EL HTML DE LA OPCION DEL SUBMENU  RESERVACIONES
**************************************************************************
*/
	if(! function_exists('pizzeria_reservaciones_callback'))
	{
	
		function pizzeria_reservaciones_callback()
		{ ?>
	       
			<div id="wprap">
				
				<h1>Reservaciones</h1>
				<table class="wp-list-table widefat striped">
					
					<thead>
						<tr>
							<th class="manage-column">ID</th>
							<th class="manage-column">Nombre</th>
							<th class="manage-column">Fecha Reserva</th>
							<th class="manage-column">Correo</th>
							<th class="manage-column">Telefono</th>
							<th class="manage-column">Mensaje</th>
						</tr>
					</thead>
					<tbody>
						<?php
							 global $wpdb;

							 $tabla     = $wpdb->prefix.'reservaciones';
							 $registros = $wpdb->get_results("SELECT * FROM $tabla",ARRAY_A);

							 foreach($registros as $registro): ?>

							 	<tr>
							 		<td><?php echo $registro['id'] ?></td>
							 		<td><?php echo $registro['nombre'] ?></td>
							 		<td><?php echo $registro['fecha'] ?></td>
							 		<td><?php echo $registro['correo'] ?></td>
							 		<td><?php echo $registro['telefono'] ?></td>
							 		<td><?php echo $registro['mensaje'] ?></td>
							 	</tr>

							<?php endforeach; ?>
						
					</tbody>

				</table>

			</div>
	
		<?php }
	
	}
