<?php

/*
**************************************************************************
   REGISTRAR TAXONOMIA
**************************************************************************
*/
   if(! function_exists('gourmet_add_taxo_tipo_receta'))
   {
   
   	function gourmet_add_taxo_tipo_receta()
   	{
   		$singular    = 'Tipo de Comida';
   		$plural      = 'Tipos de Comida';
   		$minuscula   = 'tipo_comida';
   		$post_type   = 'recetas';
   		$text_domain = 'gourmet_artist';
   
   		$labels = array(
   			'name'                       => _x( $singular, 'Taxonomy General Name', $text_domain ),
   			'singular_name'              => _x( $singular, 'Taxonomy Singular Name', $text_domain ),
   			'menu_name'                  => __( $singular, $text_domain ),
   			'all_items'                  => __( 'All Items', $text_domain ),
   			'parent_item'                => __( $singular.' Padre', $text_domain ),
   			'parent_item_colon'          => __( $singular.' Padre:', $text_domain ),
   			'new_item_name'              => __( 'Nuevo '.$singular, $text_domain ),
   			'add_new_item'               => __( 'Agregar '.$singular, $text_domain ),
   			'edit_item'                  => __( 'Editar ' .$singular, $text_domain ),
   			'update_item'                => __( 'Actualizar '.$singular, $text_domain ),
   			'view_item'                  => __( 'Ver '.$singular, $text_domain ),
   			'separate_items_with_commas' => __( 'Separar Elementos Con Comas', $text_domain ),
   			'add_or_remove_items'        => __( 'Agregar o remover '.$plural, $text_domain ),
   			'choose_from_most_used'      => __( 'Escoja entre los más usados', $text_domain ),
   			'popular_items'              => __( $plural.' más vistos', $text_domain ),
   			'search_items'               => __( 'Buscar '.$plural, $text_domain ),
   			'not_found'                  => __( 'No se encontraron '.$plural, $text_domain ),
   			'no_terms'                   => __( 'No hay '.$plural, $text_domain ),
   			'items_list'                 => __( 'Listado de '.$plural, $text_domain ),
   			'items_list_navigation'      => __( 'Items list navigation', $text_domain ),
   		);
   		$args = array(
   			'labels'                     => $labels,
   			'hierarchical'               => true,
   			'public'                     => true,
   			'show_ui'                    => true,
   			'show_admin_column'          => true,
   			'show_in_nav_menus'          => true,
   			'show_tagcloud'              => true,
   		);
   		register_taxonomy( $minuscula, array( $post_type ), $args );
   		
   	}
   
   }
   add_action('init','gourmet_add_taxo_tipo_receta' );
 /*
 **************************************************************************
    WIDGETS
 **************************************************************************
 */
    if(! function_exists('atw_register_widget'))
    {
    
      function atw_register_widget()
      {
    
         register_sidebar(array(
            'name'          => __('Footer Widgets'),
            'id'            => 'footer_widget',
            'description'   => 'Widget para el footer',
            'before_widget' => '<div class="%2$s col-md-6 widget" id="&1$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
         ));
        register_sidebar(array(
          'name'          => __('Sidebar Widgets'),
          'id'            => 'sidebar_widget',
          'description'   => 'Widget para el sidebar',
          'before_widget' => '<div class="%2$s  widget" id="&1$s">',
          'after_widget'  => '</div>',
          'before_title'  => '<h3 class="sidebar-title">',
          'after_title'   => '</h3>',
        ));
         
      }
    
    }
    add_action('widgets_init','atw_register_widget' );