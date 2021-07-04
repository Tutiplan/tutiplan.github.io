	
	<!-- JQuery -->
	<script type="text/javascript" src="dist/js/jquery-3.4.1.min.js"></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="dist/js/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="dist/js/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="dist/js/mdb.min.js"></script>
	<!-- Alertify -->
	<script type="text/javascript" src="alertifyjs/js/alertify.min.js"></script>
	<script type="text/javascript" src="scripts/funciones.js"></script>

	<!-- Jquery Scripts -->
	<script>
		new WOW().init();
	</script>

	<script>
		//Llamada de la tabla
		$(document).ready(function(){
			$('#tabla').load('components/tabla.php');
		});
	</script>

<footer>
	<div class="cyan darken-3 py-4">
		<div class="row justify-content-center align-content-center">
			<p class="text-light">© 2020 Copyright: Tutiplan</p>
		</div>
	</div>
</footer>