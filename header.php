<!DOCTYPE html>
<html lang="<?php language_attributes(); ?> ">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
	<?php $destacada = wp_get_attachment_image_src(get_post_thumbnail_id(),'full') ?>
	<?php $destacada = $destacada[0] ?>

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
						if(is_front_page()):

							$description = get_bloginfo( 'description', 'display' ); ?>
							<h1 class="site-title"><?php echo $description ?> </h1>

						<?php elseif(is_category()): ?>
							<h1 class="site-title"><?php the_archive_title() ?> </h1>

						<?php else: ?>

							<h1 class="site-title"><?php the_title() ?> </h1>

						<?php endif; ?>

					</div>
				</div>
			</div>
	</header>