<!-- Código creado por Reynald Manuel Rodriguez Ramirez; El 31 de Octubre del año 2023 -->
<?php include("includes/header.php"); ?>
<?php include("includes/funciones.php"); ?>
	<?php
		$dia_que_jesus_escogio = 6;
		if (isset($_POST["dia_del_usuario"]) && $_POST["dia_del_usuario"] == 6) {
			$modalInformation = showModalWithInformation();
		}
	?>
	<?php
		if (isset($_POST["birthday"]) && $_POST['birthday'] != null) {
			$possibleDaysOfBirthday = ["Agosto", "2 de agosto", "2 agosto", "mes de agosto"];
			if (in_array($_POST["birthday"], $possibleDaysOfBirthday)) {
				$todoMuyBien = TRUE;
			}
		}
	?>
	<?php 
	if(isset($todoMuyBien) && $todoMuyBien == TRUE) { ?>	
		<div class="modal" id="secondary_modal" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
	    		<div class="modal-content">
	    			<div class="modal-header">
	        			<h5 class="modal-title">¡Dios te bendiga!</h5>
							<p>Gracias</p>
					</div>
				</div>
			</div>
		</div>
	<?php
	}
	echo "<script>$('#secondary_modal').modal('show');</script>";
	?>
	<div class="container main_container">
		<div class="questionary_container">
			<form action="contador_regresivo.php" method="post">
				<fieldset>
					<label>¿Desea saber qué cosas Dios creó cada día?</label>
					<select>
						<option>Si</option>
						<option>No</option>
					</select>
				</fieldset>
				
				<fieldset>
					<label>Probablemente sabes qué día Dios creó al hombre, a ver, dinos:</label>
					<input type="number" name="dia_del_usuario">
				</fieldset>
				<fieldset>
					<p>
						Si ya te decidiste por una de estas opciones, pues gracias. Solo debes darle al boton aqui debajo. <br/>
						Por cierto, si te equivocaste en el día te recomendamos leer Génesis 1. Y luego tratar otra vez.
					</p>
				</fieldset>
				<button type="submit" class="btn btn-primary">Listo</button>
			</form>
			<div class="modal_container">
				<?php
					if(isset($modalInformation)) {
						echo $modalInformation;
						echo "<script>$('#main_modal').modal('show');</script>";
					}
				?>	
			</div>
		</div>
	</div>

<?php include("includes/footer.php"); ?>