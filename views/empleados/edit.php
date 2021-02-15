<?php 
    
    include(__DIR__ .'../../../includes/header.html');
    include(__DIR__ .'../../../includes/connect.php');
    $id=$_GET['id'];
    
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

							<?php 
                                                        $consulta = $db -> query("SELECT * FROM empleados WHERE ID = $id");
                                                        $nfilas = $consulta -> num_rows;
                                                        
                                                        for($F=0; $F < $nfilas; $F++)
                                                        {
                                                            $fila = $consulta -> fetch_row();
                                                            
                                                    ?> 

							<form action="../../controllers/empleados/edit.php" method="post" class="form-horizontal">
								<input type="hidden" name="id" value="<?php echo $fila[0];?>">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Nombre completo</label>
									<div class="col-sm-8">
										<input type="text" name="nombre" class="form-control1" id="focusedinput" value="<?php echo $fila[1]; ?>" required>
									</div>
									<div class="col-sm-2">
										<p class="help-block">Dato requerido*</p>
									</div>
								</div>

								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Edad</label>
									<div class="col-sm-8">
										<input type="number" name="edad" class="form-control1" id="focusedinput" value="<?php echo $fila[2]; ?>" required>
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
							<?php
                                                        }
                                                    ?>
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