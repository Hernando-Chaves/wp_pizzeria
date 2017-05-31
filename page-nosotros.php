<?php get_header(); ?>
	
	<?php if(have_posts()): ?>

		<?php while(have_posts()):the_post(); ?>

			<div class="hero" style="background-image:url(<?php echo get_the_post_thumbnail_url() ?>);">

				<div class="contenido-hero">

					<div class="texto-hero">
						
						<h1><?php the_title() ?></h1>

					</div>
 
				</div>

			</div>
		
			<div class="principal contenedor">
				
				<main class="texto-centrado contenido-paginas">
					<?php the_content() ?>
				</main>

			</div>
			<div class="main-cajas clear">
				
		
				<div class="contenido-cajas contenedor">
					<?php 
						$id_img = get_field('imagen_1');
						$img    = wp_get_attachment_image_src($id_img,'nosotros');
					?>
					<img  class="img-caja" src="<?php echo $img[0] ?>" alt="">
					<div class="info-caja">
						<?php the_field('descripcion_1') ?>
					</div>

				</div>

				<div class="contenido-cajas contenedor">
					<?php 
						$id_img = get_field('imagen_2');
						$img    = wp_get_attachment_image_src($id_img,'nosotros');
					?>
					<div class="info-caja">
						<?php the_field('descripcion_2') ?>
					</div>
					<img  class="img-caja" src="<?php echo $img[0] ?>" alt="">

				</div>

				<div class="contenido-cajas contenedor">
					<?php 
						$id_img = get_field('imagen_3');
						$img    = wp_get_attachment_image_src($id_img,'nosotros');
					?>
					<img  class="img-caja" src="<?php echo $img[0] ?>" alt="">
					<div class="info-caja">
						<?php the_field('descripcion_3') ?>
					</div>

				</div>
			</div>

		<?php endwhile ?>
	<?php endif ?>

	

<?php get_footer(); ?>
