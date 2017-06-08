<!DOCTYPE html>
<html lang="<?php language_attributes() ?>">
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<title><?php wp_title('') ?><?php if(wp_title('',false)){echo ':';} ?><?php bloginfo('name') ?></title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<?php wp_head() ?>
</head>
<body <?php body_class() ?>>
	
	<header class="encbezado-sitio">

		<div class="contenedor">
			
			<div class="logo">
				<a href="<?php esc_url(home_url('/')) ?>">
					<img src="<?php echo get_template_directory_uri().'/img/logo.svg' ?>" alt="">
				</a>
			</div>

			<div class="informacion-encabezado">

				<div class="redes-sociales">
					<?php 
						$args = [
							'theme_location'   =>  'redes',
							'container'        =>  'nav',
							'container_id'     =>  'id_redes',
							'container_class'  =>  'class_redes',
							'menu_id'          =>  'menu_redes',
							'menu_class'       =>  'menu_redes',
							'link_before'      =>  '<span class="sr-text">',
							'link_after'       =>  '<span>',
							'items_wrap'       =>  '<ul id="%1$s" class="%2$s" >%3$s</ul>',
						];
						wp_nav_menu($args);

					?>
				</div>

				<div class="direccion">
					
					<p><?php echo esc_html(get_option('pizzeria_direccion'))  ?> <br>
					<?php echo esc_html(get_option('pizzeria_telefono')) ?> </p>

				</div>
				
			</div>

		</div>
		
	</header>

	<div id="menu-principal">

		<div class="menu-responsive">
			<a href="">
				<i class="fa fa-bars" aria-hidden="true"></i> Menu
			</a>
		</div>

		<nav class="menu-sitio">
			
			<?php 
				$args = [
					'theme_location'    => 'main',
					'container'         => 'div',
					'container_id'      => 'container_id',
					'container_class'   => 'container_class',
					'menu_class'        => 'class_menu',
					'menu_id'           => 'id_menu',
					'fallback_cb'       => '',
					'depth'             => 1,
					'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				];
				wp_nav_menu($args);
			?>

		</nav>
		
	</div>