<?php 
	include_once('../advanced-custom-fields/acf.php');
	define( 'ACF_LITE', true );

	if(function_exists("register_field_group"))
	{
		register_field_group(array (
			'id' => 'acf_especialidades',
			'title' => 'especialidades',
			'fields' => array (
				array (
					'key' => 'field_592d54ffbba92',
					'label' => 'Precio',
					'name' => 'precio',
					'type' => 'text',
					'instructions' => 'Añadir precio',
					'required' => 1,
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'formatting' => 'html',
					'maxlength' => '',
				),
			),
			'location' => array (
				array (
					array (
						'param' => 'post_type',
						'operator' => '==',
						'value' => 'pizza',
						'order_no' => 0,
						'group_no' => 0,
					),
				),
			),
			'options' => array (
				'position' => 'normal',
				'layout' => 'default',
				'hide_on_screen' => array (
				),
			),
			'menu_order' => 0,
		));
		register_field_group(array (
			'id' => 'acf_inicio',
			'title' => 'Inicio',
			'fields' => array (
				array (
					'key' => 'field_593fdbc711310',
					'label' => 'Contenido',
					'name' => 'contenido',
					'type' => 'wysiwyg',
					'default_value' => '',
					'toolbar' => 'full',
					'media_upload' => 'yes',
				),
				array (
					'key' => 'field_593fdbe011311',
					'label' => 'Imagen',
					'name' => 'imagen',
					'type' => 'image',
					'instructions' => 'Sube una Imagen',
					'save_format' => 'url',
					'preview_size' => 'thumbnail',
					'library' => 'all',
				),
			),
			'location' => array (
				array (
					array (
						'param' => 'page',
						'operator' => '==',
						'value' => '24',
						'order_no' => 0,
						'group_no' => 0,
					),
				),
			),
			'options' => array (
				'position' => 'normal',
				'layout' => 'default',
				'hide_on_screen' => array (
				),
			),
			'menu_order' => 0,
		));
		register_field_group(array (
			'id' => 'acf_sobre-nosotros',
			'title' => 'sobre nosotros',
			'fields' => array (
				array (
					'key' => 'field_592577cfd3eb9',
					'label' => 'Imagen 1',
					'name' => 'imagen_1',
					'type' => 'image',
					'instructions' => 'Sube una imágen',
					'required' => 1,
					'save_format' => 'id',
					'preview_size' => 'thumbnail',
					'library' => 'all',
				),
				array (
					'key' => 'field_5925783fd3ebc',
					'label' => 'Descripcion',
					'name' => 'descripcion_1',
					'type' => 'wysiwyg',
					'default_value' => '',
					'toolbar' => 'full',
					'media_upload' => 'yes',
				),
				array (
					'key' => 'field_592577fdd3ebb',
					'label' => 'Imagen 2',
					'name' => 'imagen_2',
					'type' => 'image',
					'instructions' => 'Sube una imágen',
					'required' => 1,
					'save_format' => 'id',
					'preview_size' => 'thumbnail',
					'library' => 'all',
				),
				array (
					'key' => 'field_59257851d3ebd',
					'label' => 'Descripcion 2',
					'name' => 'descripcion_2',
					'type' => 'wysiwyg',
					'default_value' => '',
					'toolbar' => 'full',
					'media_upload' => 'yes',
				),
				array (
					'key' => 'field_592577fcd3eba',
					'label' => 'Imagen 3',
					'name' => 'imagen_3',
					'type' => 'image',
					'instructions' => 'Sube una imágen',
					'required' => 1,
					'save_format' => 'id',
					'preview_size' => 'thumbnail',
					'library' => 'all',
				),
				array (
					'key' => 'field_5925785ad3ebe',
					'label' => 'Descripcion 3',
					'name' => 'descripcion_3',
					'type' => 'wysiwyg',
					'default_value' => '',
					'toolbar' => 'full',
					'media_upload' => 'yes',
				),
			),
			'location' => array (
				array (
					array (
						'param' => 'page',
						'operator' => '==',
						'value' => '16',
						'order_no' => 0,
						'group_no' => 0,
					),
				),
			),
			'options' => array (
				'position' => 'normal',
				'layout' => 'default',
				'hide_on_screen' => array (
				),
			),
			'menu_order' => 0,
		));
	}
