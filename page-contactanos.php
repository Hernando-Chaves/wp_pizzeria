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
					<main class=" contenido-pagina " > 

							<div class="contacto">
								<form class="reserva-contacto" method="post">
									<h2 class="texto-centrado" >Realiza una reservación</h2>
									
									<div class="campo" >
										<input type="text" name="nombre" placeholder="Ingresa tu nombre" required>
									</div>
								
									<div class="campo" >
										<input type="datetime-local" name="fecha" placeholder="fecha" required>
									</div>
								
									<div class="campo" >
										<input type="email" name="correo" placeholder="Ingresa tu correo" required>
									</div>
								
									<div class="campo" >
										<input type="tel" name="telefono" placeholder="Ingresa tu telefono" required="">
									</div>
								
									<div class="campo" >
										<textarea name="mensaje" cols="46"  rows="5" placeholder="Ingresa tu mensaje"  required></textarea>
									</div>
									<input type="submit" name="enviar" class="button">
									<input type="hidden" name="oculto" value="1">
								
								
								
								</form>
							</div>
						

					</main>
					
				  </div>                                                                                                             

			<?php endwhile; ?>

		<?php endif; ?>
	


		
	</div>




<?php get_footer(); ?>
