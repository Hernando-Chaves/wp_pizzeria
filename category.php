<?php get_header(); ?>

<section class="container contenido">
	<div class="row">
		<h2 class="text-center">Nuestro Blog</h2><br>
		<?php 

			if(have_posts()):

				while(have_posts()): the_post(); ?>

					<div class="col-xs-6 col-md-4 entrada">

						<?php the_post_thumbnail('index',array('class'  => 'img-responsive')); ?>

						<div class="contenido-entrada">

							<h3><?php the_title(); ?></h3>
							<p>Escrito el: <span><?php the_time(get_option('date_format')) ?></span> </p>
							<p>Por: <span><?php the_author() ?></span> </p>
							<a class="btn btn-info" href="<?php the_permalink(); ?> "> Leer Más</a>
							
						</div>
					</div>
					
				<?php endwhile;

			endif;
		?>
		
	</div>
</section>

<?php get_footer(); ?>