<?php 
/*
Template Name:Pagina Con Sidebar
*/?>
<?php get_header(); ?>

	<section class="container contenido">
		<div class="row">

		  <?php 
		  	if(have_posts()):
		  		while(have_posts()):the_post(); ?>

					<div class="col-xs-12 col-sm-8 contenido-pagina">
						<?php the_content() ?>
					</div>

		  	<?php endwhile; 
		  	endif;
		  ?>
			<div class="col-xs-12 col-md-4">
				<?php get_sidebar(); ?>
			</div>
		</div>
		
	</section>
<?php get_footer(); ?>