<?php 
	
	if(! function_exists('pizzeria_database'))
	{
	
		function pizzeria_database()
		{
	       
			global $wpdb;
			global $pizzeria_version;

			$pizzeria_version = '1.0';
			$charset_collate  = $wpdb->get_charset_collate();
			$tabla            = $wpdb->prefix.'reservaciones';

			$sql = "CREATE TABLE $tabla (
				id mediumint(9) NOT NULL AUTO_INCREMENT,
				nombre varchar(50) NOT NULL,
				fecha datetime NOT NULL,
				correo varchar(60) DEFAULT '' NOT NULL,
				telefono varchar(12) NOT NULL,
				mensaje longtext NOT NULL,
				PRIMARY KEY (id)
			) $charset_collate;";

			require_once(ABSPATH.'wp-admin/includes/upgrade.php');
			dbDelta($sql);

			add_option('version_pizzeria',$pizzeria_version);



			// PARA ACTUALIZACIONES
			$version_actual = get_option('version_pizzeria');

			if($pizzeria_version != $version_actual)
			{
				// global $wpdb;

				$tabla = $wpdb->prefix.'reservaciones';

				$sql = "CREATE TABLE $tabla (
					id mediumint(9) NOT NULL AUTO_INCREMENT,
					nombre varchar(50) NOT NULL,
					fecha datetime NOT NULL,
					correo varchar(60) DEFAULT '' NOT NULL,
					telefono varchar(12) NOT NULL,
					mensaje longtext NOT NULL,
					PRIMARY KEY (id)
				) $charset_collate;";

				require_once(ABSPATH.'wp-admin/includes/upgrade.php');
				dbDelta($sql);

				update_option('version_pizzeria',$pizzeria_version);
			}
		}
	
	}
	add_action('after_setup_theme','pizzeria_database');
/*
**************************************************************************
      VERIFICAMOS LA VERSION 
**************************************************************************
*/

	if(! function_exists('pizzeria_check_version'))
	{
	
		function pizzeria_check_version()
		{
	       
			if(get_site_option('version_pizzeria') != $pizzeria_version )
			{
				pizzeria_database()	;
			}
	
		}
	
	}
	add_action('plugins_loaded','pizzeria_check_version');