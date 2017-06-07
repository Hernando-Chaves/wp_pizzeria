<?php 

	if(! function_exists('add_database'))
	{
	
		function add_database()
		{
	       
			global $wpdb;
			global $version_pizza;

			$tabla           = $wpdb->prefix.'test';
			$charset_collate = $wpdb->get_charset_collate();
			$version_pizza   = '0.1';

			$sql = "CREATE TABLE IF NOT EXISTS $tabla(
			        id mediumint(9) NOT NULL AUTO_INCREMENT,
			        nombre varchar(50) NOT NULL,
			        fecha datetime NOT NULL,
			        correo varchar(60) DEFAULT '' NOT NULL,
			        telefono varchar(12) NOT NULL,
			        mensaje longtext NOT NULL,
			        PRIMARY KEY (id)
			) $charset_collate";

			require_once(ABSPATH.'wp-admin/includes/upgrade.php');
			dbDelta($sql);

			add_option('Version Test',$version_pizza);
	
		}
	
	}
	add_action('after_setup_theme','add_database');