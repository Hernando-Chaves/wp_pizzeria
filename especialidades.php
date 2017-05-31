<?php 
/*
Template Name: Especialidades
*/
get_header(); ?>
	
	<?php if(have_posts()): ?>

		<?php while(have_posts()):the_post(); ?>

			<div class="hero" style="background-image:url(<?php echo get_the_post_thumbnail_url() ?>);">

				<div class="contenido-hero">

					<div class="texto-hero">
						
						<h1><?php the_title() ?></h1>

					</div>
 
				</div>

			</div>
		
			<div class="principal contenedor">
				
				<main class="texto-centrado contenido-paginas">
					<?php the_content();
					?>
				</main>

			</div>

		<?php endwhile ?>
	<?php endif ?>

	<div class="especialidades contenedor">
		<h3 class="texto-rojo">Pizzas</h3>
		<div class="contenedor-grid">
			<?php 
				$args = [
					'posts_per_page'   =>  -1,
					'post_type'        =>  'pizza',
					'order'            =>  'DESC',
					'orderby'          =>  'title',
					'category_name'    =>  'pizzas',
			    ];
			?>
		    <?php $pizzas = new WP_Query($args); ?>
		    <?php if($pizzas->have_posts()):  ?>	 

		    	<?php while($pizzas->have_posts()): $pizzas->the_post(); ?>
					
				 	 <div class="columnas2-4">
				 	 	
				 	 	<?php the_post_thumbnail('especialidad'); ?>

				 	 	<div class="texto-especialidad">
				 	 		<h4><?php the_title() ?><span>  <?php the_field('precio') ?></span> </h4>
				 	 		<?php the_content() ?>
				 	 	</div>

				 	 </div>

		    	<?php endwhile;wp_reset_postdata(); ?>

		    <?php endif; ?>

		    <h3 class="texto-rojo">Otros</h3>
		    <div class="contenedor-grid">
		    	<?php 
		    		$args = [
		    			'posts_per_page'   =>  -1,
		    			'post_type'        =>  'pizza',
		    			'order'            =>  'DESC',
		    			'orderby'          =>  'title',
		    			'category_name'    =>  'otros',
		    	    ];
		    	?>
		        <?php $otros = new WP_Query($args); ?>
		        <?php if($otros->have_posts()):  ?>	 

		        	<?php while($otros->have_posts()): $otros->the_post(); ?>
		    			
		    		 	 <div class="columnas2-4">
		    		 	 	
		    		 	 	<?php the_post_thumbnail('especialidad'); ?>

		    		 	 	<div class="texto-especialidad">
		    		 	 		<h4><?php the_title() ?><span>  <?php the_field('precio') ?></span> </h4>
		    		 	 		<?php the_content() ?>
		    		 	 	</div>

		    		 	 </div>

		        	<?php endwhile;wp_reset_postdata(); ?>

		        <?php endif; ?>
		      </div>
	    </div>
	</div>
	

<?php get_footer(); ?>
