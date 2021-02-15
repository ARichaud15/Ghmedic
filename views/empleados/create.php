<?php 
    
    include(__DIR__ .'../../../includes/header.html');
    
    //$result = $db->query("SELECT Numero_clientes FROM clientes");
    //$rowcount = $result-> num_rows;

    
 ?>

<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<div class="row">
						<h3 class="title1">Ingresa los datos del empleado</h3>
						<div class="form-three widget-shadow">
							<form action="../../controllers/empleados/create.php" method="post" class="form-horizontal">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Nombre completo</label>
									<div class="col-sm-8">
										<input type="text" name="nombre" class="form-control1" id="focusedinput" placeholder="Nombre completo" required>
									</div>
									<div class="col-sm-2">
										<p class="help-block">Dato requerido*</p>
									</div>
								</div>

								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Edad</label>
									<div class="col-sm-8">
										<input type="number" name="edad" class="form-control1" id="focusedinput" placeholder="Edad" required>
									</div>
									<div class="col-sm-2">
										<p class="help-block">Dato requerido*</p>
									</div>
								</div>

								<div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Departamento</label>
									<div class="col-sm-8"><select name="departamento" id="selector1" class="form-control1" required>
										<option>Recursos humano</option>
										<option>Sistema</option>
										<option>Mercadotecnia</option>
										<option>Taller</option>
									</select></div>
								</div>

								<br><br>
								<center><button type="submit" class="btn btn-default">Registrar</button></center>
							</form>
						</div>
					</div>
					
						
					</div>
				</div>
			</div>
		</div>
		
	</div>
	
</body>


<?php include(__DIR__ .'../../../includes/footer.html'); ?>

</html>