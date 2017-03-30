	<footer>
		
		<div class="container">
			<div class="row">
				<div class="col-xs-6 col-md-8">
					<div class="row">
						<?php dynamic_sidebar('footer_widget'); ?>
					</div>
				</div>
				<div class="col-xs-6 col-md-4">
					<h3>Redes sociales</h3>
					<?php 
						wp_nav_menu(array(
							'theme_location'    => 'pie_social',
							'container'         => 'div',
							'container_id'      => 'redes',
							'container_class'   => 'div_social',
							'link_before'       => '<span class="sr-only">',
							'link_after'        => '</span>',
							'depth'             => 1,
							'fallback_cb'       => '',
							'menu_id'           => 'menu_social',
							'menu_class'        => 'social',
							'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						));
					?>
				</div>
			</div>
		</div>
			<p>Diseño y Desarrollo por Hernando J Chaves - <?php echo date('Y') ?> </p>
	</footer>

	<?php wp_footer(); ?>

</body>
</html>