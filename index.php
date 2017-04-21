<?php get_header(); ?>
	<div class="container">
		
		<?php 
			$page    = get_option('page_for_posts');
			$id_img  = get_post_thumbnail_id($page);
			$imagen  = wp_get_attachment_image_src($id_img,'full');
		?>
			
		<div class="hero" style="background-image: url(<?php echo $imagen[0] ?>);">

				<div class="texto-hero">

				<h1><?php echo get_the_title($page); ?></h1>

			</div>

		</div>

		<div class="principal contenedor">

			<div class="contenedor-grid">

				<main class="contenido-pagina " > 
				
				<div class="columnas2-3">
					<?php if(have_posts()): ?>
				
						<?php while(have_posts()):the_post(); ?>
				
							<article class="entrada-blog">
								<a href="<?php the_permalink() ?>">
									<?php the_post_thumbnail('especialidad') ?>
								</a>
				
								<header class="informacion-entrada">
									
									<div class="fecha">
										
										<time>
											<?php echo the_time('d') ?>
											<span><?php echo the_time('M') ?></span>
										</time>
									</div>
									<div class="titulo-entrada">
										
										<h2><?php the_title() ?></h2>
										<p class="autor">
											<i class="fa fa-user" ari-hidden="true"> </i> <?php the_author() ?>
										</p>
				
									</div>
				
				
								</header>
								<div class="contenido-entrada">
									
									<?php the_excerpt() ?>
									<a href="<?php the_permalink() ?>" class="boton-rojo">Leer Más</a>
				
								</div>
				
							</article>
				
						<?php endwhile; ?>
				
					<?php endif; ?>
				<!-- METODO UNO DE PAGINACION EN WORDPRESS -->
					<!-- <div class="paginacion"> -->
						<?php// echo paginate_links() ?>
					<!-- </div> -->
					<!-- METODO DOS DE PAGINACION EN WORDPRESS -->
						<div id="paginacion">
							<div class="pagination-2">
								<i class="fa fa-angle-double-left"></i>
								 <?php next_posts_link('Anterior') ?>
							</div>
							<div class="pagination-2">
								 <?php previous_posts_link('Siguiente') ?>
								 <i class="fa fa-angle-double-right"></i>
							</div>
						</div>
					</div>
				</main>
				<div class="columnas1-3">
					<?php get_sidebar() ?>
				</div>



			</div>
			
		</div>
		
	</div>




<?php get_footer(); ?>
