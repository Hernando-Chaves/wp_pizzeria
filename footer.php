	<footer>
		<?php 
			wp_nav_menu([
				'theme_location'  =>  'main',
				'container'       =>  'div',
				'container_id'    =>  'menu_pie',
				'container_class' =>  'menu_pie',
				'menu_id'         =>  'class_pie',
				'menu_class'      =>  'class_pie',
				'after'           =>  '<span class="separador"> | </span>   ',
				'items_wrap'      =>  '<ul id="%1$s" class="%2$s">%3$s</ul>'
			]);
		?>
		<div class="ubicacion_pie">
			<p><?php echo esc_html(get_option('pizzeria_direccion')) ?> - <?php echo esc_html(get_option('pizzeria_telefono')) ?></p>
		</div>
	</footer>	
	<div class="copyright">
		Diseño y desarrollo por Hernando Chaves  Derechos Reservados - <?php echo date('Y') ?>
	</div>


<?php wp_footer() ?>

	</body>
</html>