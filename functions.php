<?php 
/*
**************************************************************************
   BORRAR BARRA ADMIN
********** ****************************************************************
*/
   add_filter('show_admin_bar','__return_false' );

/*
**************************************************************************
AGREGANDO SCRIPTS
**************************************************************************
*/
	if(! function_exists('boots3_adding_scripts'))
	{
	
		function boots3_adding_scripts()
		{
	
			wp_enqueue_style( 'style', get_stylesheet_uri());
		
			wp_enqueue_script('jquery');

			wp_enqueue_style( 'fontawesome', get_template_directory_uri().'/css/font-awesome.min.css');
			wp_enqueue_style( 'google_fonts', 'https://fonts.googleapis.com/css?family=Libre+Baskerville:700|Raleway:700');
			wp_enqueue_style('custom_css',get_template_directory_uri().'/css/custom.css');

			wp_enqueue_script( 'custom_js', get_template_directory_uri().'/js/custom.js', array('jquery'), '1.0.0', true );

		}
	
	}
	add_action('wp_enqueue_scripts','boots3_adding_scripts' );
/*
**************************************************************************
   REGISTRO DE MENUS
**************************************************************************
*/ 
   
   		register_nav_menus(array(
            'primary'     => 'Menu Principal',
   			'secondary'   => 'Menu Principal',
   			'pie_social'  => 'Redes Sociales',
   		));
/*
**************************************************************************
   THEME SUPPORT
**************************************************************************
*/
   add_theme_support('post-thumbnails' );

/*
**************************************************************************
   TAMAÑOS DE IMAGEN
**************************************************************************
*/
   add_image_size('destacada',1200,700,true);
   add_image_size('index',750,490,true);

   		
   	
  
