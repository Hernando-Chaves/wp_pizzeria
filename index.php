<?php get_header(); ?>

			<?php 
				$page_blog = get_option('page_for_posts');
				$imagen    = get_post_thumbnail_id($page_blog);
				$imagen    = wp_get_attachment_image_src($imagen,'full');
			 ?>
		<!-- 	 <pre>
				<?php //var_dump($page_blog) ?>
			</pre> -->
	

			<div class="hero" style="background-image:url(<?php echo $imagen[0]; ?>);">

				<div class="contenido-hero">

					<div class="texto-hero">
						
						<h1><?php echo get_the_title($page_blog) ?></h1>
 		</div>
 
				</div>

			</div>
		
			<div class="principal contenedor">
				<div class="contenedor-grid">
					
					<main class="columnas2-3 contenido-paginas">

						<?php if(have_posts()): ?>

							<?php while(have_posts()):the_post(); ?>

								<article>

									<a href="<?php the_permalink() ?>">
										<?php the_post_thumbnail('especialidades') ?>
									</a>
									<header class="entrada-blog clear">
										<div class="fecha">
											<time>
												<?php the_time('d') ?><br>
												<?php the_time( 'M' ); ?>
											</time>
										</div>
										<div class="titulo-entrada">
											<h3><?php the_title()  ?></h3>
											<p class="autor">
												<i class="fa fa-user" aria-hidden="true"></i>
												<?php the_author() ?>
											</p>
										</div>
									</header>
									<div class="contenido-entrada">
										<?php the_excerpt() ?>
										<a href="<?php the_permalink() ?>" class="button">Leer más...</a>
									</div>

								</article>
						

							<?php endwhile ?>

						<?php endif ?>
						
					</main>
					<?php get_sidebar() ?>
				</div><!-- .contenedor-grid -->
			</div><!-- .principal -->


<?php get_footer(); ?>
