	<footer>
		<div class="pie">
			<?php 
				wp_nav_menu([
					'theme_location'    => 'pie',
					'container'         => 'nav',
					'container_id'      => 'menu_pie',
					'container_class'   => 'menu_pie',
					'after'             => '<span class="separador"> | </span>',
					'menu_id'           => 'footer_menu',
					'menu_class'        => 'footer_menu',
					'depth'             => '',
					'link_before'       => '',
					'link_after'        => '',
					'items_wrap'        => '<ul id="%1$s" class="%2$s" >%3$s</ul>',
				]);
			?>
		</div>
		<div class="copyright">
			<p>Diseño y Desarrollo por Hernando J Chaves </p>
			<p> © Derechos Reservados <?php echo date('Y') ?></p>
		</div>
	</footer>


<?php 
wp_footer();