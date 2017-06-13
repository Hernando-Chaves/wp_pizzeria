<div class="contacto">
	<form class="reserva-contacto" method="post">
		<h3 class="texto-centrado" >Realiza una reservación</h3>
		
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
			<input type="tel" name="telefono" placeholder="Ingresa tu telefono" required maxlength="12">
		</div>
	
		<div class="campo" >
			<textarea name="mensaje" cols="46"  rows="5" placeholder="Ingresa tu mensaje"  required></textarea>
		</div>
		<input type="submit" name="enviar" class="button">
		<input type="hidden" name="oculto" value="1">
	</form>
</div>