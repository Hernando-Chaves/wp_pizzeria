<?php get_header(); ?>

<h2 class="text-center">Últimas Entradas</h2>

<section class="container contenido">
	<div class="row">
		<?php 
			$args = array(
				'posts_per_page'  => 6
			);
			$posts = new WP_Query($args);

			if($posts->have_posts()):

				while($posts->have_posts()): $posts->the_post(); ?>
					<div class="col-xs-6 col-md-4 entrada">

						<?php the_post_thumbnail('index',array('class'  => 'img-responsive')); ?>

						<div class="contenido-entrada">

							<h3><?php the_title(); ?></h3>
							<p>Escrito el: <span><?php the_time(get_option('date_format')) ?></span> </p>
							<p>Por: <span><?php the_author() ?></span> </p>
							<a class="btn btn-info" href="<?php the_permalink(); ?> "> Leer Más</a>
							
						</div>
					</div>
				<?php endwhile;wp_reset_postdata();

			endif;
		?>
		
	</div>
</section>

<section class="container categorias-blog">

	<h2 class="text-center">Por Categoria:</h2>

	<?php $categorias =get_categories() ?>
		<div class="row">
		<?php 
			foreach ($categorias as $categoria) { ?>
				<div class="col-xs-6 col-md-6 col-lg-3 categoria">
				
					<i class="<?php echo $categoria->description ?> " aria-hidden="true"></i>
				
					<a href="<?php echo get_category_link( $categoria->cat_ID ); ?> ">
						<?php echo $categoria->name ?>
					</a>
				</div>
			<?php } ?>
	</div>
</section>

<?php get_footer(); ?>