<!DOCTYPE html>
<html lang="<?php language_attributes(); ?> ">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php 
		$post_id   = get_option('page_for_posts');
		$img_id    = get_post_thumbnail_id( $post_id );
		$destacada = wp_get_attachment_image_src($img_id,'full');
		$destacada = $destacada[0];
	?>

	<header class="site-header" style="background-image: url(<?php echo $destacada ?>)">
		<nav class="navegacion">
			<div class="container">
				<div class="row">

					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
						        <span class="sr-only">Toggle navigation</span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						      </button>
						<a href="<?php echo esc_url(home_url('/') ); ?> ">
							<img src="<?php echo get_stylesheet_directory_uri().'/img/logo.png' ?> " alt="">
						</a>
					</div><!-- navbar-header -->

					<div class="navbar-right">
						<?php 
							wp_nav_menu(array(
								'theme_location'   => 'primary',
								'container_id'     => 'navbar',
								'container_class'  => 'collapse navbar-collapse',
								'menu_class'       => 'nav navbar-nav navbar-right',
							));
						?>
					</div><!-- navbar-right -->
				</div><!-- row -->
			</div><!-- container -->
		</nav>

			<div class="container titulo">
				<div class="row">
					<div class="col-sm-6">
					<?php 
						$pagina_blog = get_option('page_for_posts' );
						$titulo      = get_the_title($pagina_blog);
					?>

						<h1 class="site-title"><?php echo $titulo ?> </h1>
						
				</div>
			</div>
	</header>