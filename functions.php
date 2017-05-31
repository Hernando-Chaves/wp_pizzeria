<?php
/*
 **************************************************************************
    REGISTRAR CUSTOM POST TYPE
 **************************************************************************
 */

   if(! function_exists('gourmet_add_post_recetas'))
   {

      function gourmet_add_post_recetas()
      {
         $singular    = 'Pizza';
         $plural      = 'Pizzas';
         $minuscula   = strtolower($singular);
         $text_domain = 'gourmet_artist';

         $labels = array(
            'name'                  => _x( $plural, 'Post Type General Name', $text_domain ),
            'singular_name'         => _x( $singular, 'Post Type Singular Name', $text_domain ),
            'menu_name'             => __( $plural, $text_domain ),
            'name_admin_bar'        => __( $plural, $text_domain ),
            'parent_item_colon'     => __( $sigular.' Padre:', $text_domain ),
            'all_items'             => __( 'Todas las '.$plural, $text_domain ),
            'add_new_item'          => __( 'Agregar Nueva '.$sngular, $text_domain ),
            'add_new'               => __( 'Agregar Nueva '.$singular, $text_domain ),
            'new_item'              => __( 'Nueva '.$singular, $text_domain ),
            'edit_item'             => __( 'Editar '.$singular, $text_domain ),
            'update_item'           => __( 'Actualizar '.$singular, $text_domain ),
            'view_item'             => __( 'Ver '.$singular, $text_domain ),
            'view_items'            => __( 'Ver '.$plural, $text_domain ),
            'search_items'          => __( 'Buscar '.$singular, $text_domain ),
            'not_found'             => __( 'No se encontraron '.$plural, $text_domain ),
            'not_found_in_trash'    => __( 'No hay '.$plural.' en la papelera', $text_domain ),
            'featured_image'        => __( 'Imagen Destacada', $text_domain ),
         );
         $args = array(
            'label'                 => __( $minuscula, $text_domain ),
            'description'           => __( 'Recetas para cocina', $text_domain ),
            'labels'                => $labels,
            'supports'              => array('title','editor','thumbnail' ),
            'taxonomies'            => array( 'category', 'post_tag' ),
            'hierarchical'          => false,
            'public'                => true,
            'rewrite'               => ['slug'  =>  'especialidades'],
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_icon'             => 'dashicons-sos',
            'menu_position'         => 5,
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,    
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
         );
         register_post_type( $minuscula, $args );
         
      }

   }
   add_action('init','gourmet_add_post_recetas' );

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
			wp_enqueue_style( 'fluidbox_css', get_template_directory_uri().'/css/fluidbox.min.css');
			wp_enqueue_style( 'google_fonts', 'https://fonts.googleapis.com/css?family=Open+Sans|Raleway:400,700,900');
			wp_enqueue_style( 'custom_css',get_template_directory_uri().'/css/custom.css');

			wp_enqueue_script( 'custom_js', get_template_directory_uri().'/js/custom.js', array('jquery'), '1.0.0', true );
			wp_enqueue_script( 'fluidbox_js',get_template_directory_uri().'/js/jquery.fluidbox.min.js',['jquery'],'1.0',true);

		}
	
	}
	add_action('wp_enqueue_scripts','boots3_adding_scripts' );
/*
**************************************************************************
   REGISTRO DE MENUS
**************************************************************************
*/ 
   if(! function_exists('pizzeria_add_menus'))
   {
   
   	function pizzeria_add_menus()
   	{
          
   		register_nav_menus([
   			'redes'  =>  'Redes Sociales',
   			'main'   =>  'Menu Principal',
   		]);
   
   	}
   
   }
   add_action('init','pizzeria_add_menus');
/*
**************************************************************************
   THEME SUPPORT
**************************************************************************
*/
   if(! function_exists('pizzeria_setup'))
   {
   
      function pizzeria_setup()
      {
          
         add_theme_support('post-thumbnails' );
   
      }
   
   }
   add_action('after_setup_theme','pizzeria_setup');

/*
**************************************************************************
   TAMAÑOS DE IMAGEN
**************************************************************************
*/
   // add_image_size('destacada',1200,700,true);
   // add_image_size('index',750,490,true);
   // add_image_size('nosotros', 350, 220,true);
   add_image_size('nosotros', 437, 291,true);
   add_image_size('especialidad', 768, 515,true);

   update_option( 'thumbnail_size_w', 253 );
   update_option( 'thumbnail_size_h', 164);

/*
**************************************************************************
   REGISTRAR WIDGET
**************************************************************************
*/
   if(! function_exists('pizzeria_add_widget'))
   {
   
      function pizzeria_add_widget()
      {
          
         register_sidebar([
            'name'           =>  __('Blog Sidebar'),
            'id'             =>  'blog_sidebar',
            'description'    =>  'Widget Pizzeria',
            'before_widget'  =>  '<div class="widget">',
            'after_widget'   =>  '</div>',
            'before_title'   =>  '<h3>',
            'after_title'    =>  '</h3>',
         ]);
   
      }
   
   }
   add_action('widgets_init','pizzeria_add_widget');