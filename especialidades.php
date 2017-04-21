<?php
/*
Template Name: Especialidades
*/
get_header(); ?>
	<div class="container">
		
		<?php if(have_posts()): ?>

			<?php while(have_posts()):the_post(); ?>

				<div class="hero" style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>);">

 					<div class="texto-hero">

						<h2><?php the_title(); ?></h2>

					</div>

				</div>

				<div class="principal contenedor">
					<main class=" contenido-pagina" > 

						<?php the_content(); ?>

					</main>
					
				</div>                                                                                                              

			<?php endwhile; ?>

		<?php endif; ?>

		<div class="especialidades">
			
			<div class="contenedor-grid contenedor">
				<?php 
					$args = [
						'posts_per_page'  =>  -1,
						'post_type'       =>  'especialidad',
						'orderby'         =>  'title',
						'order'           =>  'ASC',
						'category_name'   =>  'pizza'
					];
					$pizzas = new WP_Query($args); ?>

				<h3 class="texto-rojo">Pizzas</h3>
				
				<?php if($pizzas->have_posts()):

					while($pizzas->have_posts()):$pizzas->the_post(); ?>

							<div class="columnas2-4">
								
								<?php the_post_thumbnail('especialidad') ?>

								<div class="texto-especialidad">
									
									<h4><?php the_title() ?><span> <?php the_field('precio') ?></span></h4>
									<?php the_content() ?>

								</div>

							</div>
						
					<?php endwhile;wp_reset_postdata();

				endif;
			      ?>
			</div>
			<div class="contenedor-grid contenedor">
				<?php 
					$args = [
						'posts_per_page'  =>  -1,
						'post_type'       =>  'especialidad',
						'orderby'         =>  'title',
						'order'           =>  'ASC',
						'category_name'   =>  'otro'
					];
					$otros = new WP_Query($args); ?>

				<h3 class="texto-rojo">Otros</h3>
				
				<?php if($otros->have_posts()):

					while($otros->have_posts()):$otros->the_post(); ?>

							<div class="columnas2-4">
								
								<?php the_post_thumbnail('especialidad') ?>

								<div class="texto-especialidad">
									
									<h4><?php the_title() ?><span> <?php the_field('precio') ?></span></h4>
									<?php the_content() ?>

								</div>

							</div>
						
					<?php endwhile;wp_reset_postdata();

				endif;
			      ?>
			</div>
		</div>


		
	</div>




<?php get_footer(); ?>
