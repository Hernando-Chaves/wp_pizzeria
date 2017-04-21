<!DOCTYPE html>
<html lang="<?php language_attributes() ?>  ">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<title><?php wp_title('') ?><?php if(wp_title('',false)){echo ':';} ?><?php bloginfo('name') ?>  </title>
		<link rel="pingback" href="<?php bloginfo('pingback_url') ?> ">
		<?php wp_head() ?>
	</head>
	<body <?php body_class() ?> >

		<header class="encabezado-sitio">
			
			<div class="contenedor">
				
				<div class="logo">
					<a href="<?php esc_url(home_url('/' ) ); ?>  ">
						<img src="<?php echo get_template_directory_uri() ?>/img/logo.svg" alt="">
					</a>
				</div>

				<div class="informacion-encabezado">
					
					<div class="redes-sociales">
						
						<?php 
							$args = [
								'theme_location'    => 'social',
								'container'         => 'nav',
								'container_id'      => 'menu_social',
								'container_class'   => 'menu-social',
								'menu_class'        => 'menu_redes',
								'menu_id'           => 'menu_redes',
								'link_before'       => '<span class="sr-text">',
								'link_after'        => '</span>',
								'fallback_cb'       => '',
								'depth'             => 1,
								'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							];
							wp_nav_menu($args);
						?>

					</div><!-- REDES SOCIALES -->
					<div class="direccion">
						
						<p>Diagonal 54b 63 -13<br>
						Santa fe de Urrao (Antioquia)</p>

					</div>

				</div>

			</div>

		</header>

		<div class="menu_principal">
			<div class="menu_responsive">
				<a href="">
					<i class="fa fa-bars" aria-hidden="true"></i> Menu
				</a>
			</div>
			<nav class="menu-sitio"  >
				<div class="contenedor navegacion">
					
					<?php 
						wp_nav_menu([
							'theme_location'    => 'principal',
							'container'         => 'div',
							'container_id'      => 'container_id',
							'container_class'   => 'container_class',
							'menu_class'        => 'class_menu',
							'menu_id'           => 'id_menu',
							'link_before'       => '<span class="sr-text">',
							'link_after'        => '</span>',
							'fallback_cb'       => '',
							'depth'             => 1,
							'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			
						]);
						   
						  
					?>
			
				</div>
			</nav>
		</div>
		
	</body>
</html>
