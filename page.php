<?php get_header(); ?>

	<section class="container contenido">
		<div class="row">

		<?php if(is_page('contacto')): ?>

			<div class="col-sm-6 col-sm-offset-3 pagina-full-width">

			<?php while(have_posts()):the_post(); ?>
				
				<?php the_content(); ?>
				
			<?php endwhile; ?>
			</div>

		<?php else: ?>
			<?php the_content(); ?>
		<?php endif; ?>
		 
			
		</div>
		
	</section>
<?php get_footer(); ?>