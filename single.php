<?php get_header(); ?>

<section class="container contenido-single">
	<div class="row">
		<h2 class="text-center">Nuestro Blog</h2><br>
		<?php 

			if(have_posts()):

				while(have_posts()): the_post(); ?>

					<?php the_content(); ?>
					
				<?php endwhile;

			endif;
		?>
		
	</div>
</section>

<?php get_footer(); ?>