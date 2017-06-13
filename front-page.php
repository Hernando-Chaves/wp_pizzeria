<?php get_header(); ?>
	
	<?php if(have_posts()): ?>

		<?php while(have_posts()):the_post(); ?>

			<div class="hero" style="background-image:url(<?php echo get_the_post_thumbnail_url() ?>);">

				<div class="contenido-hero front-page">

					<div class="texto-hero">
						
						<h1><?php echo esc_html(get_option('blogdescription')); ?></h1>
						<?php the_content() ?>
						<?php $url = get_page_by_title('Sobre Nosotros'); ?>

					</div>
						<a href="<?php echo esc_attr(get_permalink($url->ID) )?>" class="button">Leer Más</a>
 
				</div>

			</div>
		
		<?php endwhile ?>
	<?php endif ?>

			<div class="principal contenedor">
				
				<main class="contenedor-grid">
					<h2 class="rojo texto-centrado">Nuestras Especialidades</h2>
					<?php 
						$args = [
							'post_type'      =>  'pizza',
							'posts_per_page' =>  3,
							'orderby'        =>  'rand',
							'category_name'  =>  'pizzas',
						];
						$especialidades = new WP_Query($args);
							
					?>
						<?php if($especialidades->have_posts()): ?>

							<?php while($especialidades->have_posts()):$especialidades->the_post(); ?>

                                <div class="especialidad columnas1-3">

									<div class="contenido-especialidad">

										<?php the_post_thumbnail('especialidad_front') ?>
										
										<div class="informacion-platillo">
										
											<h3><?php the_title() ?></h3>
											<?php the_content() ?>
											<p class="precio"><?php the_field('precio') ?></p>
											<a href="<?php the_permalink() ?>" class="button">Leer Más</a>
											
										</div>
									</div>
								</div>

							<?php endwhile;wp_reset_postdata(); ?>

						<?php endif; ?>
				</main>

			</div>

			<section class="ingredientes">
				
				<div class="contenedor">

					<div class="contenedor-grid">

						<?php if(have_posts()): ?>

							<?php while(have_posts()):the_post(); ?>

							<div class="columnas2-4">
								
								<?php the_field('contenido');

									$url = get_page_by_title('Menu');
								?>
								<a href="<?php echo get_permalink($url->ID) ?>" class="button">Leer Más</a>

							</div>

							<div class="columnas2-4 imagen">
								
								<img src="<?php the_field('imagen') ?>" alt="">
								
							</div>

							<?php endwhile; ?>

						<?php endif; ?>
					</div>

				</div>

			</section>

			<section class="contenedor front-gallery">
				
				<h2 class="rojo texto-centrado">Galería de Imagenes</h2>
				<?php 
					$url = get_page_by_title('Galeria');
					echo get_post_gallery($url->ID);
				?>

			</section>

			<section class="ubicacion-reservacion">
				
				<div class="contenedor-grid">
					
					<div class="columnas2-4">
						
						<div id="mapa"></div>	

					</div>
					<div class="columnas2-4">
						
						<?php get_template_part('templates/formulario','reservaciones') ?>

					</div>

				</div>

			</section>
			    
			
<?php get_footer(); ?>
