<?php get_header(); ?>
	
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
					<?php the_content() ?>
				</main>

			</div>

		<?php endwhile ?>
	<?php endif ?>
	<div class="contenedor comentario">
		<?php comment_form() ?>
	</div>
	<div class="contenedor lista-comentarios">
		<h3 class="texto-centrado" >Comentarios</h3>
		<ul class="">
			
		<?php 
			$comentarios = get_comments([
				'post_id'  =>  $post->ID,
				'status'   =>  'approve',
			]);
			wp_list_comments([
				'per_page'           =>  10,
				'reverse_top_level'  =>  'false',
			],$comentarios);
		?>

		</ul>
	</div>
<?php get_footer(); ?>
