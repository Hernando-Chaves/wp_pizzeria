<?php get_header(); ?>

	<div class="contenedor container">
		
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

			<?php endwhile; ?>

		<?php endif; ?>
		<div id="form-comentarios">
			<?php comment_form() ?>
		</div>
		<div class="comentarios-resp">
			<ul class="ul-comments">
				<?php 
					$comentarios = get_comments([
						'post_id' =>  $post->ID,
						'status'  =>  'approve',
					]);
					wp_list_comments([
						'per_page'           =>  6,
						'reverse_top_level'  =>  false,
					],$comentarios);
				?>
			</ul>

		</div>

		
	</div>




<?php get_footer(); ?>
