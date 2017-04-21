<?php get_header(); ?>
	<div class="container">
		
		<?php if(have_posts()): ?>

			<?php while(have_posts()):the_post(); ?>

				<div class="hero" style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>);">

 					<div class="texto-hero">

						<h2><?php the_title(); ?></h2>

					</div>

				</div>

				<div class="principal contenedor">
					<main class="texto-centrado contenido-pagina" > 

						<?php the_content(); ?>

					</main>
					
				</div>                                                                                                              
				<div class="informacion-cajas contenedor">
					
					<div class="caja">
						<?php 
							$id_img = get_field('imagen1');
							$img    = wp_get_attachment_image_src($id_img,'nosotros');
						?>
						
						<img src="<?php echo $img[0] ?>  " class="imagen-caja">
						<div class="contenido-caja">
							<?php the_field('descripcion1') ?>
						</div>

					</div>
					<div class="caja">
						<?php 
							$id_img = get_field('imagen2');
							$img    = wp_get_attachment_image_src($id_img,'nosotros');
						?>
						<div class="contenido-caja">
							<?php the_field('descripcion2') ?>
						</div>
						<img src="<?php echo $img[0] ?>" class="imagen-caja">

					</div>
					<div class="caja">
						<?php 
							$id_img = get_field('imagen3');
							$img    = wp_get_attachment_image_src($id_img,'nosotros');
						?>
						<img src="<?php echo $img[0] ?>" class="imagen-caja">
						<div class="contenido-caja">
							<?php the_field('descripcion3') ?>
						</div>

					</div>

				</div>
			<?php endwhile; ?>

		<?php endif; ?>


		
	</div>




<?php get_footer(); ?>
